# Dependency status

Runtime requirements are PHP8.5, mbstring and these exact published Kumwe versions. The table mirrors
[Composer metadata](../composer.json); source/attestation evidence remains in resources/release-readiness.json.

| Package | Exact version |
| --- | --- |
| [kumwe/access-context](https://packagist.org/packages/kumwe/access-context) | 0.1.2 |
| [kumwe/contribution](https://packagist.org/packages/kumwe/contribution) | 0.1.1 |
| [kumwe/conversion](https://packagist.org/packages/kumwe/conversion) | 0.1.5 |
| [kumwe/canonical-json](https://packagist.org/packages/kumwe/canonical-json) | 0.1.1 |
| [kumwe/idempotency](https://packagist.org/packages/kumwe/idempotency) | 0.1.2 |
| [kumwe/record-model](https://packagist.org/packages/kumwe/record-model) | 0.1.3 |
| [kumwe/record-query](https://packagist.org/packages/kumwe/record-query) | 0.1.3 |
| [kumwe/record-values](https://packagist.org/packages/kumwe/record-values) | 0.1.4 |

All declared packages and the transitive Business Definition/Sequence closure are discoverable through Packagist.
Custom root VCS overrides are not required. Keep exact versions compatible across the complete resolved graph;
verify dependency readiness, production source/dist identities and the built archive's no-dev consumer.

The signature closure uses existing canonical packages for identity, access context, conversion, encoding,
idempotency and record semantics. This package does not duplicate their implementations or own their registries.
Publication coordinates do not self-attest independent artifact verification or Core acceptance.
