<?php

declare(strict_types=1);

namespace Kumwe\BusinessSurface\Contract\Tests\Case;

use InvalidArgumentException;
use Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessPayload;
use Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext;
use Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationInput;
use Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationModel;
use Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget;
use Kumwe\BusinessSurface\Contract\Tests\FixtureEncoder;
use PHPUnit\Framework\TestCase;

final class FieldInputBoundaryTest extends TestCase
{
    public function testInputRejectsHostObjectsAndDetachesArrayReferences(): void
    {
        $value = 'original';
        $input = $this->input(['body' => &$value]);
        $value = 'changed';
        self::assertSame(['body' => 'original'], $input->value);
        foreach ([new \stdClass(), static fn () => null, 1.2, str_repeat('x', 1_048_577)] as $value) {
            try {
                $this->input($value);
                self::fail('Invalid field value was admitted.');
            } catch (InvalidArgumentException) {
                self::assertTrue(true);
            }
        }
    }

    public function testCustomPayloadCannotRetainMutableReferences(): void
    {
        $value = 'original';
        $this->expectException(InvalidArgumentException::class);
        CustomBusinessPayload::assertObject(['body' => &$value], 'command');
    }

    public function testSecretEditorNeverRetainsInput(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new FieldPresentationModel('secret', 'Secret', FieldPresentationContext::Create, FieldWidget::Secret, '', 'sensitive', true, false, new FixtureEncoder());
    }

    public function testReadContextCannotEnableAnEditor(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new FieldPresentationModel('name', 'Name', FieldPresentationContext::Detail, FieldWidget::Text, '', null, true, false, new FixtureEncoder());
    }

    public function testErrorsMustBeLists(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->input(null, ['named' => 'bad value']);
    }

    private function input(mixed $value, array $errors = []): FieldPresentationInput
    {
        return new FieldPresentationInput('name', 'Name', 'core.text', false, false, false, false, false, FieldPresentationContext::Create, $value, errors: $errors);
    }
}
