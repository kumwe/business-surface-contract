# Dependency status

Canonical JSON 0.1.1 provides the released encoder contract. Business Definition
0.1.0 requires Sequence 0.2.0, so this package uses the same exact stable version.
Access Context, Contribution and Conversion retain their existing stable pins.

Idempotency, Record Values, Record Model and Record Query still have no published
stable versions. Source checks accept their existing main branches and the live
repair branches that align them with released Canonical JSON and Business
Definition. These coordinates refer to actual branches, without version aliases.

The package has no stable changelog record until all four dependencies publish
and can be pinned exactly. Automatic publication tooling is implemented, and
source CI retains behavior, API, analysis and isolated archive-consumer checks.
Independent attestations are separate evidence, never publication prerequisites.
