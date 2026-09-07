# Public API

All values enforce the documented constructor invariants. Domain methods perform no I/O, own no transaction and make no authorization decisions. Immutable values are safe to share; host inputs and lookup ports must remain generation-stable for the duration of an operation. Exceptions and parameter detail appear below verbatim from the source contract.

## Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionCommand

/** Concurrency- and replay-aware command for one signed custom business action. @since 0.2.0 */

### __construct

/**
     * @param  ExecutionContext      $context                 Authenticated site context supplied by the host.
     * @param  string                $definitionIdentifier    Published definition UUID or multi-segment handle.
     * @param  string                $recordId                Identifier of the existing record the action targets.
     * @param  int                   $expectedVersion         Record version the caller last read, rejecting the
     *                                                        command on concurrent modification.
     * @param  string                $action                  Manifest-declared handle of the custom action to execute.
     * @param  IdempotencyKey        $idempotencyKey          Caller-supplied key deduplicating replayed submissions.
     * @param  array<string, mixed>  $input                   JSON-object payload handed to the action handler.
     * @param ?string $organizationIdentifier Organization scope, when the definition requires one.
     * @param ?string $approvalRequestId UUID of the approval request authorizing this action, when one is attached.
     *
     * @since  0.2.0
     */

```php
public function __construct(Kumwe\Context\Value\ExecutionContext $context, string $definitionIdentifier, string $recordId, int $expectedVersion, string $action, Kumwe\Idempotency\IdempotencyKey $idempotencyKey, array $input = array (
), ?string $organizationIdentifier = NULL, ?string $approvalRequestId = NULL);
```

### Public properties

- `readonly Kumwe\Context\Value\ExecutionContext $context`
- `readonly string $definitionIdentifier`
- `readonly string $recordId`
- `readonly int $expectedVersion`
- `readonly string $action`
- `readonly Kumwe\Idempotency\IdempotencyKey $idempotencyKey`
- `readonly array $input`
- `readonly ?string $organizationIdentifier`
- `readonly ?string $approvalRequestId`

## Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionDeclaration

/** Immutable signed declaration for one custom business action handler. @since 0.2.0 */

### fromManifest

/**
     * @param  array<string, mixed>  $document  Validated manifest declaration.
     *
     * @since  0.2.0
     */

```php
public static function fromManifest(array $document): Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionDeclaration;
```

### toArray

/** @return array<string, mixed> @since 0.2.0 */

```php
public function toArray(): array;
```

### Public properties

- `readonly string $handler`
- `readonly string $schema`
- `readonly Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessSchema $commandSchema`
- `readonly Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessSchema $resultSchema`

## Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionHandler

/** Executable bound to one manifest-declared custom business action. @since 0.2.0 */

### handle

/** @param CustomBusinessActionCommand $command Validated, replay-aware invocation naming the target record and carrying the action payload. @since 0.2.0 */

```php
public function handle(Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionCommand $command): Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionResult;
```

## Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessActionResult

/** Bounded, versioned result returned by a custom business action. @since 0.2.0 */

### __construct

/**
     * @param  array<string, mixed>  $data           Bounded JSON-object payload the action hands back to the caller.
     * @param  int                   $recordVersion  Guarded version the business record holds after the action ran.
     * @param  IdempotencyKey        $operationId    Idempotency key identifying the operation for replay deduplication.
     * @param  bool                  $replayed       Whether this result replays a previously completed submission.
     * @param ?string $workflowState Workflow state handle the record moved to, when the action changed it.
     * @param  bool                  $deleted        Whether the action deleted the record it targeted.
     *
     * @since  0.2.0
     */

```php
public function __construct(array $data, int $recordVersion, Kumwe\Idempotency\IdempotencyKey $operationId, bool $replayed = false, ?string $workflowState = NULL, bool $deleted = false);
```

### Public properties

- `readonly array $data`
- `readonly int $recordVersion`
- `readonly Kumwe\Idempotency\IdempotencyKey $operationId`
- `readonly bool $replayed`
- `readonly ?string $workflowState`
- `readonly bool $deleted`

## Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessPayload

/** Structural budget shared by custom business inputs and outputs. @since 0.2.0 */

### assertObject

/**
     * Assert that one decoded payload is a JSON object inside the shared structural budget.
     *
     * @param   array<string, mixed>  $payload  Decoded custom business object whose shape, size and keys are checked.
     * @param   string                $kind     Payload role (for example "view query" or "action input") named in
     *     failure messages.
     *
     * @return  void
     *
     * @throws  InvalidArgumentException  When the payload is not an object or breaches the depth, node, string or
     *     byte budget.
     *
     * @since   0.2.0
     */

```php
public static function assertObject(array $payload, string $kind): void;
```

## Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessReference

/** Validates owner-scoped identifiers used to bind custom handlers to signed schema contracts. @since 0.2.0 */

### assert

/**
     * @param   string  $reference  Dotted identifier declared by a package.
     * @param   string  $kind       Reference kind named in the failure.
     *
     * @throws  InvalidArgumentException  When the value is not namespaced, lowercase, or within 191 bytes.
     *
     * @since   0.2.0
     */

```php
public static function assert(string $reference, string $kind): void;
```

## Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessSchema

/**
 * Closed, deterministic JSON Schema subset for one custom business handler contract.
 *
 * The subset has no references, executable formats, regular expressions, floating-point numbers, or
 * open objects. Schema graphs and every collection they can describe are bounded, which makes a signed
 * contract safe to validate during activation and safe to evaluate before and after every handler call.
 *
 * @since  0.2.0
 */

### __construct

/**
     * Validate and canonicalize one closed object contract.
     *
     * @param   array<string, mixed>  $schema  Candidate schema declared by a signed package.
     *
     * @throws  InvalidArgumentException  When the root is not a closed object schema, a keyword or type is
     *          unsupported, a bound is unsafe, or the graph exceeds eight levels or 256 nodes.
     *
     * @since   0.2.0
     */

```php
public function __construct(array $schema);
```

### fromArray

/**
     * Rebuild a contract schema from its manifest representation.
     *
     * @param   mixed  $schema  Decoded manifest member expected to be a JSON object.
     *
     * @return  self  Validated schema contract.
     *
     * @throws  InvalidArgumentException  When the value is not an object or violates the supported subset.
     *
     * @since   0.2.0
     */

```php
public static function fromArray(mixed $schema): Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessSchema;
```

### toArray

/**
     * Export the canonical schema document used for manifest reconciliation and publication.
     *
     * @return  array<string, mixed>  Recursively key-sorted closed JSON Schema document.
     *
     * @since   0.2.0
     */

```php
public function toArray(): array;
```

### assertValid

/**
     * Validate a bounded object payload against this schema.
     *
     * @param   array<string, mixed>  $payload  Query parameters, command input, or handler result.
     * @param   string                $kind     Payload kind used in stable validation failures.
     *
     * @return  void
     *
     * @throws  InvalidArgumentException  When the payload exceeds shared bounds or violates the schema.
     *
     * @since   0.2.0
     */

```php
public function assertValid(array $payload, string $kind): void;
```

## Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewDeclaration

/** Immutable signed declaration for one custom business view handler. @since 0.2.0 */

### fromManifest

/**
     * @param  array<string, mixed>  $document  Validated manifest declaration.
     *
     * @since  0.2.0
     */

```php
public static function fromManifest(array $document): Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewDeclaration;
```

### toArray

/** @return array<string, mixed> @since 0.2.0 */

```php
public function toArray(): array;
```

### Public properties

- `readonly string $handler`
- `readonly string $schema`
- `readonly Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessSchema $querySchema`
- `readonly Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessSchema $resultSchema`

## Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewHandler

/** Executable bound to one manifest-declared custom business view. @since 0.2.0 */

### handle

/** @param CustomBusinessViewQuery $query Validated view invocation selecting the records and parameters the view renders from. @since 0.2.0 */

```php
public function handle(Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewQuery $query): Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewResult;
```

## Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewQuery

/** Validated, delivery-neutral query for one signed custom business view. @since 0.2.0 */

### __construct

/**
     * @param  ExecutionContext          $context                 Authenticated host-issued context for the active
     *     invocation.
     * @param  string                    $definitionIdentifier    Published business definition UUID or multi-segment
     *     handle the view belongs to.
     * @param  string                    $view                    Manifest-declared handle of the custom view being
     *     rendered.
     * @param  RecordQuerySpecification  $records                 Bounded browse specification selecting the records
     *     the view draws on.
     * @param  array<string, mixed>      $parameters              Caller-supplied view parameters, budget-checked as a
     *     custom payload.
     * @param  ?string                   $organizationIdentifier  Organization scope, when the definition requires one.
     * @param  ?string                   $recordId                Single record the view is anchored to, or null for a
     *     collection view.
     *
     * @since  0.2.0
     */

```php
public function __construct(Kumwe\Context\Value\ExecutionContext $context, string $definitionIdentifier, string $view, Kumwe\Record\Query\RecordQuerySpecification $records, array $parameters = array (
), ?string $organizationIdentifier = NULL, ?string $recordId = NULL);
```

### Public properties

- `readonly Kumwe\Context\Value\ExecutionContext $context`
- `readonly string $definitionIdentifier`
- `readonly string $view`
- `readonly Kumwe\Record\Query\RecordQuerySpecification $records`
- `readonly array $parameters`
- `readonly ?string $organizationIdentifier`
- `readonly ?string $recordId`

## Kumwe\BusinessSurface\Contract\Application\Custom\CustomBusinessViewResult

/** Bounded result returned by a custom business view. @since 0.2.0 */

### __construct

/** @param array<string, mixed> $data @since 0.2.0 */

```php
public function __construct(array $data);
```

### Public properties

- `readonly array $data`

## Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationConfiguration

/**
 * Closed portable configuration handed to one field presenter.
 *
 * Configuration is copied from an already admitted signed field definition. It deliberately accepts
 * only a shallow object of exact scalars or scalar lists: presenters can read type-specific options,
 * while executable values, nested policy documents and unbounded structures cannot cross the SPI.
 *
 * @since 0.2.0
 */

### fromArray

/**
     * Admit the portable field-definition configuration profile.
     *
     * @param array<string, mixed> $values Candidate type-specific settings.
     *
     * @return self Validated, key-sorted configuration.
     *
     * @throws InvalidArgumentException When the object is too wide, a key is malformed, a value is
     *         nested or executable, a string/list exceeds its bound, or canonical JSON exceeds 32 KiB.
     *
     * @since 0.2.0
     */

```php
public static function fromArray(array $values): Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationConfiguration;
```

### empty

/** @return self Empty configuration. @since 0.2.0 */

```php
public static function empty(): Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationConfiguration;
```

### get

/**
     * Read one declared setting without exposing a mutable array.
     *
     * @param string $key Valid configuration key.
     *
     * @return string|int|bool|list<string|int|bool|null>|null Declared value, or null when absent.
     *
     * @since 0.2.0
     */

```php
public function get(string $key): array|string|int|bool|null;
```

### toArray

/** @return array<string, string|int|bool|list<string|int|bool|null>|null> Canonical settings. @since 0.2.0 */

```php
public function toArray(): array;
```

### Public constants

- `MAXIMUM_KEYS = 64`
- `MAXIMUM_LIST_ITEMS = 256`
- `MAXIMUM_STRING_BYTES = 4096`
- `MAXIMUM_BYTES = 32768`

## Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext

/**
 * Closed contexts in which a generated business field can be presented.
 *
 * @since  0.1.0
 */

### edits

/**
     * Report whether this context accepts submitted input.
     *
     * @return  bool  True for create, update, filter and relation contexts.
     *
     * @since   0.1.0
     */

```php
public function edits(): bool;
```

### cases

Generated enum/runtime member.

```php
public static function cases(): array;
```

### from

Generated enum/runtime member.

```php
public static function from(string|int $value): static;
```

### tryFrom

Generated enum/runtime member.

```php
public static function tryFrom(string|int $value): ?static;
```

### Public properties

- `readonly string $name`
- `readonly string $value`

### Public constants

- `List = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext::List`
- `Detail = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext::Detail`
- `Create = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext::Create`
- `Update = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext::Update`
- `Filter = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext::Filter`
- `Relation = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext::Relation`
- `History = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext::History`

## Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContribution

/**
 * Signed declaration of the presentation contexts one contributed field type implements.
 *
 * The executable presenter never enters a manifest or runtime publication. This immutable value is the
 * comparable declaration a strict contribution phase reconciles before accepting that presenter object.
 *
 * @since  0.1.0
 */

### __construct

/**
     * Declare complete presentation coverage for one owner-namespaced field type.
     *
     * @param   string                                    $fieldType  Exact contributed field-type identifier.
     * @param   non-empty-list<FieldPresentationContext>  $contexts   Unique render and edit contexts implemented.
     *
     * @throws  InvalidArgumentException  When the identifier or context set is malformed or unbounded.
     *
     * @since   0.1.0
     */

```php
public function __construct(string $fieldType, array $contexts);
```

### fromArray

/**
     * Parse one strict manifest declaration.
     *
     * @param   array<string, mixed>  $document  Closed field-type and context document.
     *
     * @return  self  Validated canonical declaration.
     *
     * @throws  InvalidArgumentException  When a key or value is unknown, malformed, repeated, or unbounded.
     *
     * @since   0.1.0
     */

```php
public static function fromArray(array $document): Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContribution;
```

### identifier

/** @return string Declared field-type identifier. @since 0.2.0 */

```php
public function identifier(): string;
```

### toArray

/**
     * Export the signed manifest and contribution-inventory shape.
     *
     * @return  array{field_type: string, contexts: non-empty-list<string>}  Canonical declaration.
     *
     * @since   0.1.0
     */

```php
public function toArray(): array;
```

### Public properties

- `readonly array $contexts`
- `readonly string $fieldType`

## Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationInput

/**
 * Host-neutral field metadata and an already policy-disclosed value.
 *
 * @since  0.2.0
 */

### __construct

/**
     * @param string                         $handle               Stable snake_case field handle.
     * @param string                         $label                Policy-disclosed presentation label.
     * @param string                         $fieldType            Owner-scoped logical field-type identifier.
     * @param bool                           $required             Whether the signed definition requires a value.
     * @param bool                           $readOnly             Whether callers may never write the field.
     * @param bool                           $computed             Whether the server derives the field.
     * @param bool                           $serverOnly           Whether callers may never submit the field.
     * @param bool                           $immutableAfterCreate Whether updates may not change the field.
     * @param FieldPresentationContext       $context              Exact display or edit surface.
     * @param mixed                          $value                Already admitted, policy-disclosed value.
     * @param string                         $locale               Bounded locale formatting hint.
     * @param list<string>                   $errors               Caller-visible validation errors.
     * @param bool                           $editable             Current host policy and conditions admit input.
     * @param ?int                           $length               Maximum field length, when declared.
     * @param ?int                           $precision            Portable exact-number precision, when declared.
     * @param ?int                           $scale                Portable exact-number scale, when declared.
     * @param ?FieldPresentationConfiguration $configuration       Closed type-specific settings.
     *
     * @since  0.2.0
     */

```php
public function __construct(string $handle, string $label, string $fieldType, bool $required, bool $readOnly, bool $computed, bool $serverOnly, bool $immutableAfterCreate, Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext $context, mixed $value = NULL, string $locale = 'en', array $errors = array (
), bool $editable = false, ?int $length = NULL, ?int $precision = NULL, ?int $scale = NULL, ?Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationConfiguration $configuration = NULL);
```

### permitsEditing

/** @since 0.2.0 */

```php
public function permitsEditing(): bool;
```

### Public properties

- `readonly mixed $value`
- `readonly Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationConfiguration $configuration`
- `readonly string $handle`
- `readonly string $label`
- `readonly string $fieldType`
- `readonly bool $required`
- `readonly bool $readOnly`
- `readonly bool $computed`
- `readonly bool $serverOnly`
- `readonly bool $immutableAfterCreate`
- `readonly Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext $context`
- `readonly string $locale`
- `readonly array $errors`
- `readonly bool $editable`
- `readonly ?int $length`
- `readonly ?int $precision`
- `readonly ?int $scale`

## Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationModel

/**
 * Escaped-view-model request returned by core or extension field strategies.
 *
 * A strategy cannot return markup or a Twig path. It chooses one core-owned semantic widget and supplies
 * bounded data which Twig auto-escapes, keeping extension renderers useful without making them an HTML or
 * template-inclusion escape hatch.
 *
 * Retained input is limited to 100000 value nodes, 32 levels, 512 entries per collection
 * and one mebibyte of canonical bytes. The node cap is the initial BSC-002 compatibility decision.
 *
 * A converted amount is the one value whose display text is not the presenter's to compose. When
 * `$provenance` is present this model refuses any display but the self-describing portable form of the
 * amount it carries, so the figure and the rate, as-at instant and provider that justify it cannot come
 * apart on the way to a template — including a template that renders nothing but `display`. Conversion
 * is presentation only, so a presentation carrying provenance is also read-only and retains no input.
 *
 * @since  0.2.0
 */

### __construct

/**
     * Capture one semantic field view model.
     *
     * @param   string                                     $handle      Stable field handle used in labels and names.
     * @param   string                                     $label       Operator-facing label.
     * @param   FieldPresentationContext                   $context     Exact presentation context.
     * @param   FieldWidget                                $widget      Core-owned widget to render.
     * @param   string                                     $display     Escaped text for read contexts.
     * @param   mixed                                      $inputValue  Typed retained input; always null for secrets.
     * @param   bool                                       $editable    Whether an editor may be enabled.
     * @param   bool                                       $required    Whether empty input is invalid.
     * @param   CanonicalEncoder $canonicalEncoder Explicit byte encoder supplied by the host.
     * @param   list<string>                               $errors      Field-level caller-visible errors.
     * @param   list<array{value: string, label: string}>  $options     Closed choice options.
     * @param   array<string, int|string|bool>             $attributes  Allow-listed bounds for the core widget.
     * @param   ?array<string, mixed>                      $provenance  Conversion evidence exactly as
     *          `ConvertedMoneyValue::toArray()` writes it, or null when the value is not a converted amount.
     *
     * @throws  InvalidArgumentException  When identity, labels, widget state, input size, errors, options, or
     *          attributes are malformed or unbounded; when provenance is not a complete converted amount;
     *          or when a converted amount is offered as an editable, retained or non-portable display.
     * @throws  InvalidArgumentException  When retained input or attributes cannot be encoded in the closed
     *          value space.
     *
     * @since   0.2.0
     */

```php
public function __construct(string $handle, string $label, Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext $context, Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget $widget, string $display, mixed $inputValue, bool $editable, bool $required, Kumwe\CanonicalJson\CanonicalEncoder $canonicalEncoder, array $errors = array (
), array $options = array (
), array $attributes = array (
), ?array $provenance = NULL);
```

### toArray

/**
     * Export the model to the shape shared Twig macros receive.
     *
     * @return  array<string, mixed>  Markup-free semantic field presentation.
     *
     * @since   0.2.0
     */

```php
public function toArray(): array;
```

### Public properties

- `readonly string $handle`
- `readonly string $label`
- `readonly Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationContext $context`
- `readonly Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget $widget`
- `readonly string $display`
- `readonly mixed $inputValue`
- `readonly bool $editable`
- `readonly bool $required`
- `readonly array $errors`
- `readonly array $options`
- `readonly array $attributes`
- `readonly ?array $provenance`

## Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresenter

/** Safe field presentation strategy with no host-container access. @since 0.2.0 */

### present

/** @param FieldPresentationInput $input Host-neutral field metadata with the already policy-disclosed value to present. @since 0.2.0 */

```php
public function present(Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationInput $input): Kumwe\BusinessSurface\Contract\Presentation\Field\FieldPresentationModel;
```

## Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget

/**
 * Allow-listed semantic widgets safe renderers may ask core Twig templates to emit.
 *
 * @since  0.1.0
 */

### cases

Generated enum/runtime member.

```php
public static function cases(): array;
```

### from

Generated enum/runtime member.

```php
public static function from(string|int $value): static;
```

### tryFrom

Generated enum/runtime member.

```php
public static function tryFrom(string|int $value): ?static;
```

### Public properties

- `readonly string $name`
- `readonly string $value`

### Public constants

- `Output = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Output`
- `Text = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Text`
- `Textarea = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Textarea`
- `Integer = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Integer`
- `Decimal = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Decimal`
- `Checkbox = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Checkbox`
- `Select = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Select`
- `Date = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Date`
- `Time = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Time`
- `DateTime = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::DateTime`
- `Email = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Email`
- `Url = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Url`
- `Phone = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Phone`
- `Money = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Money`
- `Quantity = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Quantity`
- `ZonedDateTime = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::ZonedDateTime`
- `MediaReference = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::MediaReference`
- `EntityReference = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::EntityReference`
- `Json = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Json`
- `Collection = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Collection`
- `Secret = \Kumwe\BusinessSurface\Contract\Presentation\Field\FieldWidget::Secret`

