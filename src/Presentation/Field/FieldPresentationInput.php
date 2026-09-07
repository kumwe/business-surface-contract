<?php

declare(strict_types=1);

namespace Kumwe\BusinessSurface\Contract\Presentation\Field;

use InvalidArgumentException;
use Kumwe\Conversion\Value\ConvertedMoneyValue;
use Kumwe\Record\Value\RecordValueGuard;
use ReflectionReference;

/**
 * Host-neutral field metadata and an already policy-disclosed value.
 *
 * @since  0.2.0
 */
final readonly class FieldPresentationInput
{
    /** Detached, bounded value retaining approved immutable domain objects. @since 0.2.0 */
    public mixed $value;

    /** Type-specific settings copied from the admitted signed field definition. @since 0.2.0 */
    public FieldPresentationConfiguration $configuration;

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
    public function __construct(
        public string $handle,
        public string $label,
        public string $fieldType,
        public bool $required,
        public bool $readOnly,
        public bool $computed,
        public bool $serverOnly,
        public bool $immutableAfterCreate,
        public FieldPresentationContext $context,
        mixed $value = null,
        public string $locale = 'en',
        public array $errors = [],
        public bool $editable = false,
        public ?int $length = null,
        public ?int $precision = null,
        public ?int $scale = null,
        ?FieldPresentationConfiguration $configuration = null,
    ) {
        if (
            preg_match('/^[a-z][a-z0-9_]{0,62}$/D', $handle) !== 1
            || trim($label) === '' || strlen($label) > 120 || !mb_check_encoding($label, 'UTF-8')
        ) {
            throw new InvalidArgumentException('Field presentation metadata is invalid.');
        }
        if (strlen($fieldType) > 191 || preg_match('/^[a-z][a-z0-9]*(?:[._:-][a-z0-9]+){1,15}$/D', $fieldType) !== 1) {
            throw new InvalidArgumentException('A field presentation type is invalid.');
        }
        if (
            preg_match('/^[A-Za-z]{2,3}(?:[-_][A-Za-z0-9]{2,8}){0,2}$/D', $locale) !== 1
            || !array_is_list($errors) || count($errors) > 32
        ) {
            throw new InvalidArgumentException('Field presentation locale or errors are invalid.');
        }
        foreach ($errors as $key => $error) {
            if (
                !is_string($error) || $error === '' || strlen($error) > 1000
                || !mb_check_encoding($error, 'UTF-8') || ReflectionReference::fromArrayElement($errors, $key) !== null
            ) {
                throw new InvalidArgumentException('A field presentation error is invalid.');
            }
        }
        if ($length !== null && ($length < 1 || $length > 1_000_000)) {
            throw new InvalidArgumentException('A field presentation length is outside portable bounds.');
        }
        if (($precision === null) !== ($scale === null)) {
            throw new InvalidArgumentException('Field presentation precision and scale must be declared together.');
        }
        if (
            $precision !== null
            && $scale !== null
            && ($precision < 1 || $precision > 65 || $scale < 0 || $scale > 30 || $scale > $precision)
        ) {
            throw new InvalidArgumentException('Field presentation precision or scale is outside portable bounds.');
        }
        $this->configuration = $configuration ?? FieldPresentationConfiguration::empty();
        RecordValueGuard::assertValue($value instanceof ConvertedMoneyValue ? $value->toArray() : $value);
        $bytes = 0;
        $this->value = self::snapshot($value, $bytes);
    }

    /**
     * Detach array references without converting canonical immutable domain values.
     *
     * @param mixed $value Structurally admitted value.
     * @param int $bytes Shared string/key byte budget of one mebibyte.
     * @return mixed Independent value tree preserving semantic objects.
     * @throws InvalidArgumentException For invalid UTF-8 or exceeded byte bounds.
     */
    private static function snapshot(mixed $value, int &$bytes): mixed
    {
        if (is_string($value)) {
            $bytes += strlen($value);
            if ($bytes > 1_048_576 || !mb_check_encoding($value, 'UTF-8')) {
                throw new InvalidArgumentException('A field input must contain bounded valid UTF-8.');
            }
        }
        if (!is_array($value)) {
            return $value;
        }
        $copy = [];
        foreach ($value as $key => $item) {
            if (is_string($key)) {
                self::snapshot($key, $bytes);
            }
            $copy[$key] = self::snapshot($item, $bytes);
        }
        return $copy;
    }

    /** @since 0.2.0 */
    public function permitsEditing(): bool
    {
        return $this->context->edits()
            && $this->editable
            && !$this->readOnly
            && !$this->computed
            && !$this->serverOnly
            && !($this->context === FieldPresentationContext::Update && $this->immutableAfterCreate);
    }
}
