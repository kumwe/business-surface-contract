# Proposed dependency amendment — review blocked

The recomputed SDK source closure requires canonical-json (explicit CanonicalEncoder), idempotency (IdempotencyKey), record-model (BusinessRecordRequestGuard), record-query (RecordQuerySpecification), and conversion (ConvertedMoneyValue). Contribution owns contribution identity; access-context owns ExecutionContext. Record-values is an explicit root stability flag for record-model's draft dependency. The first, second, third, and conversion dependencies extend the original ceiling and require review. They are not silently treated as approved or released. No foreign helper implementation is copied.

FieldPresentationModel now requires a CanonicalEncoder argument after `required`. The host supplies a conforming encoder. This intentional constructor break removes the static SDK dependency; prevalidation preserves rejection of floats, objects/resources, depth above 32 and arrays wider than 512 before the generic encoder sees input. The encoder is only used during construction and is not retained. The package remains values and contracts with no service provider. Tests use a explicitly test-scoped encoder fixture.

BusinessRecordRequestGuard performs portable identity/version shape validation only; authentication, provenance, policy, execution and transactions remain App responsibilities. Conversion provenance is read back through ConvertedMoneyValue and still requires read-only, no retained input, and exact portable display.

All dev coordinates are integration candidates, not verified stable releases. Publication and App adoption are blocked until ceiling approval and every exact dependency release is independently verified.

Business Definition candidate PR #5 corrects the observed main source 46c18ab1a0165994e1f6cca7473c319ac6f55dc3 to use an actual Sequence development dependency. The explicit root dev constraints must be replaced with independently verified exact immutable versions before release.

Merged semantic owners use their actual dev-main coordinates. Record Model and Record Query also accept their dependency-repair candidate branches until those fixes merge. Sequence is an explicit transitive stability flag in the root manifest. These are actual development dependencies; no development-to-stable aliases are accepted.

BSC-002 explicitly adds a 100,000-node retained-input limit because the generic canonical profile cannot exceed that ceiling. Boundary tests prove the restriction before calling the encoder. This intentional initial-contract change requires review; the canonical owner ceiling is not widened.
