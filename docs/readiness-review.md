# Extraction readiness review — 2026-09-07

Candidate version: `0.1.1`. Published baseline: `0.1.0`.

Enforce secret-editor non-retention, read-context immutability, approved canonical field input types and detached input arrays. Reject mutable custom payload/presentation references and malformed error lists.

The existing source map remains the extraction provenance record. Content and Navigation use App baseline `24ecf956423c18933e824b43cea1bfb9127a79a9`; the surface declarations and business contracts preserve the SDK provenance in docs/source-map.json. This review adds portable boundary behavior and package-owned tests without changing App production code or test ownership.

## Runtime boundary

Field inputs reuse RecordValueGuard and retain approved immutable domain values, including conversion evidence; arbitrary host objects, callbacks, floats and resources fail. Field input arrays are copied without references and bounded to one mebibyte of string/key bytes. Secret editors cannot retain a value, and read contexts cannot enable editing. Custom input/result payloads reject PHP references that could mutate a readonly DTO after validation. Existing CanonicalEncoder and lower-level semantic contracts remain canonical owners.

The actual public signature closure includes Canonical JSON, Conversion, Record Model, Record Values and Idempotency in addition to the original brief's nominal ceiling. These are existing released dependencies used to avoid duplicating lower-level DTOs, validation, replay identity or precision semantics. No dependency back to this surface package is introduced.

## Verification and remaining release steps

Package-owned regression tests cover the changed invariants. The public API gate now compares generated Markdown as well as JSON, including full method signatures, defaults, public properties and constant values; source file order is sorted before generation. No ConfigProvider is introduced because these values, pure algorithms and ports have no injected runtime coordinator.

Local source validation uses PHP 8.5.10 and exact dependency-tag archives where registry access is unavailable. This is distinct from the supported Composer security and built-archive consumer gates in CI. Merge only after the complete package workflow passes. The candidate is not a published or independently release-verified artifact. Publication, independent artifact verification and a coordinated exact-pin consumer train remain required before App integration. App acceptance, authorization, lifecycle, persistence and browser tests remain App-owned and were not run or claimed by this package review.
