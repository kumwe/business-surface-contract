<?php

declare(strict_types=1);

if (!class_exists(Composer\Autoload\ClassLoader::class, false)) {
    require dirname(__DIR__) . '/vendor/autoload.php';
}
use Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContribution;
use Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext;
$definition = new FieldPresentationContribution('acme.rating', [FieldPresentationContext::Detail]);
if ($definition->identifier() !== 'acme.rating') { throw new RuntimeException('Contribution mismatch.'); }
$schema = ['type' => 'object', 'additionalProperties' => false, 'properties' => [
    'count' => ['type' => 'integer', 'minimum' => 1, 'maximum' => 10],
], 'required' => ['count']];
$action = \Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionDeclaration::fromManifest([
    'handler' => 'acme.increment', 'schema' => 'acme.counter',
    'command_schema' => $schema, 'result_schema' => $schema,
]);
$view = \Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewDeclaration::fromManifest([
    'handler' => 'acme.browse', 'schema' => 'acme.counter',
    'query_schema' => $schema, 'result_schema' => $schema,
]);
$action->commandSchema->assertValid(['count' => 1], 'command');
$view->querySchema->assertValid(['count' => 10], 'query');
echo "Business surface action, view and field declarations passed.\n";
