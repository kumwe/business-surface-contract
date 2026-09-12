# Architecture

Portable custom business action, view and field presentation contracts.

Source provenance is recorded in [source-map.json](source-map.json). The package has no App or Extension SDK production dependency. Ports define persistence requirements; concrete implementations remain host-owned. No global state, DI registration or alternate host is introduced.

Source ownership evidence originates in Extension SDK. Executable HTTP bindings remain host-owned; portable surface declarations do not install routes or establish authorization. Contribution owns identity and registry policy; access-control owns capability grammar.
