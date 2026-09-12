# Core integration contract

Business Surface Contract owns portable action/view declarations, typed commands/queries/results, field
presentation values and strategy interfaces. Core owns trusted contribution selection, actor/site authority,
authorization, transactions, persistence, dispatch, rendering, delivery and recovery. Declarations and typed
contexts do not grant permission or execute an HTTP request by themselves.

Construct values directly and supply host implementations of `CustomBusinessActionHandler`,
`CustomBusinessViewHandler` and `FieldPresenter`. Preserve typed context, selection, replay identity and safe output
boundaries. Handler conformance does not replace Core's authorization, transaction or browser acceptance tests.

`FieldPresentationModel` accepts an explicit `CanonicalEncoder` after `required`; Core selects the binding and the
DTO retains no encoder. Generic encoding and lower-level validation remain with their canonical packages.
Approved immutable domain values, including conversion evidence, retain exact semantics. Arbitrary host objects,
callbacks, floats and resources are rejected.

Secret editors cannot retain a value and read contexts cannot enable editing. Field data detaches caller
references and admits at most 100,000 value nodes, depth 32, collection width 512 and the documented one-mebibyte
byte budget. Custom payloads/results reject mutable references and malformed error collections. Preserve these
limits and exact-value restrictions in new adapters.

The [source map](source-map.json) preserves SDK namespace ownership evidence. Consumer integration verifies current
references before replacing legacy declarations and their duplicated implementation tests. Core retains
composition, authority, lifecycle, database, delivery, browser and recovery coverage. No aliases or parallel
class roots are supported.

See [public API](public-api.md), [integration](integration.md), [compatibility](../COMPATIBILITY.md),
[dependency status](dependency-decision.md) and [release record](release-record.md).
