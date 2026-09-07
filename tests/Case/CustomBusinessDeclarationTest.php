<?php

declare(strict_types=1);

namespace Kumwe\BusinessSurface\Contract\Tests\Case;

use InvalidArgumentException;
use Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionDeclaration;
use Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewDeclaration;
use Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessSchema;
use Kumwe\BusinessSurface\Contract\Tests\TestCase;

final class CustomBusinessDeclarationTest extends TestCase
{
    public function testCustomDeclarationsValidatePayloadsAgainstTheirClosedSchema(): void
    {
        $schema = ['type' => 'object', 'additionalProperties' => false, 'properties' => [
            'count' => ['type' => 'integer', 'minimum' => 1, 'maximum' => 10]], 'required' => ['count']];
        $contract = CustomBusinessSchema::fromArray($schema);
        $contract->assertValid(['count' => 1], 'command');
        $contract->assertValid(['count' => 10], 'result');
        $this->assertSame($contract->toArray(), CustomBusinessSchema::fromArray($contract->toArray())->toArray(),
            'Custom schema canonical export round trips.');
        foreach ([[], ['count' => 0], ['count' => 11], ['count' => 1.0], ['count' => 1, 'extra' => true]] as $payload) {
            $this->assertThrows(static fn () => $contract->assertValid($payload, 'command'),
                InvalidArgumentException::class, 'Closed exact payload constraints are package-owned.');
        }
        foreach ([[CustomBusinessActionDeclaration::class, 'command_schema'],
            [CustomBusinessViewDeclaration::class, 'query_schema']] as [$class, $input]) {
            $document = ['handler' => 'acme.handler', 'schema' => 'acme.schema', $input => $schema,
                'result_schema' => $schema];
            $declared = $class::fromManifest($document);
            $this->assertSame($declared->toArray(), $class::fromManifest($declared->toArray())->toArray(),
                'Action/view declarations retain canonical schema data.');
            foreach ([array_replace($document, ['schema' => 'acme.handler']),
                array_replace($document, ['handler' => 'foreign']), $document + ['unexpected' => true]] as $invalid) {
                $this->assertThrows(static fn () => $class::fromManifest($invalid), InvalidArgumentException::class,
                    'Ambiguous references and extra members refuse.');
            }
        }
    }
}
