# Package-owned test responsibilities

The package owns all portable input, result and presentation invariants. `composer test`
discovers every test below through the committed PHPUnit configuration; `composer check`
and the shared PR/default-branch gate execute that suite.

| Suite | Owned responsibility |
|---|---|
| `CustomBusinessDeclarationTest` | Bounded custom action/view schemas and declaration validation. |
| `CustomBusinessPortTest` | Typed command/query DTOs, identity grammar, exact JSON and replay bounds. |
| `FieldPresentationSecurityTest` | Safe semantic widgets, provenance, retained input and display boundaries. |
| `FieldInputBoundaryTest` | Detached input arrays, host-object refusals, reference rejection and secret/display boundaries. |
| `SurfaceContractConformanceTest` | Foreign implementations invoked through all three exported strategy interfaces; context/selection/replay continuity, exact decimal data, and refusal of an invalid editor result. |

The conformance fixtures are executable examples of the package interface contract. They do
not implement an application dispatcher or imply that an arbitrary third-party handler is
safe. Each host or extension must test its concrete implementations. Authorization, transaction
execution, registry selection, persistence, actual rendering and end-to-end acceptance stay
with their owners and are not claimed by these portable fixtures.
