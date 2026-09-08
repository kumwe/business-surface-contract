<?php

declare(strict_types=1);

namespace Kumwe\BusinessSurface\Contract\Tests\Case;

use InvalidArgumentException;
use Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionCommand;
use Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionHandler;
use Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionResult;
use Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewHandler;
use Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewQuery;
use Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewResult;
use Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext;
use Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationInput;
use Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationModel;
use Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresenter;
use Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget;
use Kumwe\BusinessSurface\Contract\Tests\FixtureEncoder;
use Kumwe\Context\Contract\SystemActor;
use Kumwe\Context\Value\ExecutionContext;
use Kumwe\Context\Value\SiteContext;
use Kumwe\Idempotency\IdempotencyKey;
use Kumwe\Record\Query\RecordQuerySpecification;
use PHPUnit\Framework\TestCase;
use stdClass;

/** Exercise third-party implementations through every exported surface strategy contract. */
final class SurfaceContractConformanceTest extends TestCase
{
    public function testActionAdapterRetainsScopeConcurrencyAndReplayIdentity(): void
    {
        $context = $this->context();
        $key = IdempotencyKey::fromString('operation-conformance');
        $command = new CustomBusinessActionCommand(
            $context,
            'crm.contact',
            'record-1',
            7,
            'approve',
            $key,
            ['amount' => '12345678901234567890.01'],
            'org:north',
        );
        $handler = new class implements CustomBusinessActionHandler {
            public ?CustomBusinessActionCommand $received = null;

            public function handle(CustomBusinessActionCommand $command): CustomBusinessActionResult
            {
                $this->received = $command;
                return new CustomBusinessActionResult(
                    $command->input,
                    $command->expectedVersion + 1,
                    $command->idempotencyKey,
                    replayed: true,
                    workflowState: 'approved',
                );
            }
        };
        $invoke = static fn (CustomBusinessActionHandler $adapter): CustomBusinessActionResult => $adapter->handle($command);
        $result = $invoke($handler);

        self::assertSame($command, $handler->received);
        self::assertSame($context, $handler->received->context);
        self::assertSame('org:north', $handler->received->organizationIdentifier);
        self::assertSame($key, $result->operationId);
        self::assertSame(8, $result->recordVersion);
        self::assertTrue($result->replayed);
        self::assertSame('approved', $result->workflowState);
        self::assertSame(['amount' => '12345678901234567890.01'], $result->data);
    }

    public function testViewAdapterReceivesCanonicalSelectionAndReturnsPortableData(): void
    {
        $records = new RecordQuerySpecification();
        $query = new CustomBusinessViewQuery(
            $this->context(),
            'crm.contact',
            'detail',
            $records,
            ['mode' => 'summary'],
            'org:north',
            'record-1',
        );
        $handler = new class implements CustomBusinessViewHandler {
            public ?CustomBusinessViewQuery $received = null;

            public function handle(CustomBusinessViewQuery $query): CustomBusinessViewResult
            {
                $this->received = $query;
                return new CustomBusinessViewResult(['record' => $query->recordId, 'mode' => $query->parameters['mode']]);
            }
        };
        $invoke = static fn (CustomBusinessViewHandler $adapter): CustomBusinessViewResult => $adapter->handle($query);
        $result = $invoke($handler);

        self::assertSame($query, $handler->received);
        self::assertSame($records, $handler->received->records);
        self::assertSame('org:north', $handler->received->organizationIdentifier);
        self::assertSame(['record' => 'record-1', 'mode' => 'summary'], $result->data);
    }

    public function testForeignPresenterProducesBoundedSemanticOutput(): void
    {
        $input = $this->input();
        $presenter = new class implements FieldPresenter {
            public function present(FieldPresentationInput $input): FieldPresentationModel
            {
                return new FieldPresentationModel(
                    $input->handle,
                    $input->label,
                    $input->context,
                    FieldWidget::Output,
                    (string) $input->value,
                    null,
                    false,
                    $input->required,
                    new FixtureEncoder(),
                );
            }
        };
        $invoke = static fn (FieldPresenter $adapter): FieldPresentationModel => $adapter->present($input);
        $model = $invoke($presenter);

        self::assertSame('total', $model->handle);
        self::assertSame(FieldPresentationContext::Detail, $model->context);
        self::assertSame(FieldWidget::Output, $model->widget);
        self::assertSame('12345678901234567890.01', $model->display);
        self::assertNull($model->inputValue);
        self::assertFalse($model->editable);
    }

    public function testForeignPresenterCannotReturnAnEditorInADisplayContext(): void
    {
        $presenter = new class implements FieldPresenter {
            public function present(FieldPresentationInput $input): FieldPresentationModel
            {
                return new FieldPresentationModel(
                    $input->handle,
                    $input->label,
                    $input->context,
                    FieldWidget::Text,
                    '',
                    $input->value,
                    true,
                    false,
                    new FixtureEncoder(),
                );
            }
        };
        $invoke = static fn (FieldPresenter $adapter, FieldPresentationInput $input): FieldPresentationModel =>
            $adapter->present($input);

        $this->expectException(InvalidArgumentException::class);
        $invoke($presenter, $this->input());
    }

    private function input(): FieldPresentationInput
    {
        return new FieldPresentationInput(
            'total',
            'Total',
            'core.decimal',
            false,
            false,
            false,
            false,
            false,
            FieldPresentationContext::Detail,
            '12345678901234567890.01',
        );
    }

    private function context(): ExecutionContext
    {
        return ExecutionContext::issueSystem(
            new stdClass(),
            new class implements SystemActor {
                public function identifier(): string
                {
                    return 'system:conformance';
                }
            },
            SiteContext::default(),
            'request-conformance',
        );
    }
}
