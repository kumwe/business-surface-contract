# Dependency status

The runtime dependency graph uses exact published Kumwe versions. The following source tags are the reviewed dependency coordinates; this table is not an external release attestation.

| Package | Exact version | Tag commit |
| --- | --- | --- |
| `kumwe/access-context` | `0.1.0` | `34241cbd0cc67934536d2921eca14b063be6fb81` |
| `kumwe/contribution` | `0.1.0` | `0504e87c836ca61edadc92df4203d6ccba8f0eca` |
| `kumwe/conversion` | `0.1.0` | `b1ae15e3ccddaffe709e01d20bf59a9e8a14714d` |
| `kumwe/canonical-json` | `0.1.1` | `e7006a2580a49a1c8ab507b0d7b9c3403b4f9f58` |
| `kumwe/idempotency` | `0.1.0` | `26ec2ac31c493a088dd2bd01983b7428692bd1ea` |
| `kumwe/record-model` | `0.1.0` | `d7955e6beae2c3a9fa30052aea5ec3478af7dffc` |
| `kumwe/record-query` | `0.1.0` | `64b9036cbebc4f41007e5bc04acde807054efe94` |
| `kumwe/record-values` | `0.1.0` | `191c5b53fbda0179f3387f6a819716f4bc8f2be2` |

A floating `latest`, `*` or development branch is not an immutable release coordinate. A newer direct pin must be compatible with every transitive exact pin; update the dependency train bottom-up and verify each successor before publishing a dependent package. Existing exact dependencies are retained here to avoid creating an unsatisfiable mixed graph.

Composer repository configuration is root-only. Until all packages are discoverable through Packagist, a consumer must reproduce the explicit VCS repositories from composer.json and those required by its full dependency graph. The built-archive consumer gate exercises this resolution.

Business Definition and Sequence are transitive dependencies of the canonical Record Model/Query closure; redundant direct requirements were removed. Their VCS repositories remain available to Composer at the consumer root.
