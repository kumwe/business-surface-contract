# Surface contract guarantees

The package enforces secret-editor non-retention, read-context immutability, approved canonical field input types,
detached arrays and bounded collections. Mutable custom payload/presentation references and malformed error lists
are rejected before retained state is exposed.

Field inputs reuse RecordValueGuard and preserve approved immutable domain values, including conversion evidence.
They reject arbitrary host objects, callbacks, floats and resources. The canonical encoder and lower-level
semantic packages remain the owners of encoding, replay identity, record types and precision behavior.

The public signature closure deliberately includes Canonical JSON, Conversion, Record Model, Record Values and
Idempotency. Reusing these released contracts avoids duplicated DTOs, validation and precision semantics; no
reverse dependency on this surface package is introduced.

Package tests and external strategy conformance cover the typed action, view and field-presentation boundaries.
The API gate verifies generated Markdown and JSON, including signatures, defaults, properties and constant values.
No ConfigProvider is needed for directly constructed values and explicit ports.

The full package workflow verifies source, dependencies, security, behavior/conformance and the built archive's
no-dev consumer. Independent artifact verification and Core acceptance remain separate. See
[Core contract](core-contract.md), [test ownership](test-ownership.md) and [releasing](releasing.md).
