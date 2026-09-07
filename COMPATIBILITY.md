# Compatibility

Requires PHP 8.5. The source map records a deliberate namespace ownership break; no aliases or dual class declarations are shipped. Canonical packages own imported types. Exceptions and wire shapes remain inherited unless a decision below documents a change. Independent release verification is required before a consumer exact-pins a stable version.

BSC-001: FieldPresentationModel requires an explicit CanonicalEncoder after `required`; App supplies the binding, and the DTO retains no encoder.

BSC-002: the extracted initial contract limits retained field input to 100,000 value nodes, matching GenericV1. The former SDK helper had no total node cap. This is an intentional compatibility restriction, tested at exactly 100,000 accepted and 100,001 refused nodes. Depth 32, collection width 512, one mebibyte output, and exact-value restrictions remain in force.
