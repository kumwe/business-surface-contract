# business-surface-contract

Portable custom business action, view and field presentation contracts.

Requires PHP 8.5 and the runtime dependencies in `composer.json`. The canonical namespace is `Kumwe\BusinessSurface\Contract\`. Version 0.1.0 is recorded for automatic publication after human merge. Confirm the published tag and source identity before the separate verification and App adoption stages.

Run `composer install`, `composer check`, and `composer examples`. [Public API](docs/public-api.md), [architecture](docs/architecture.md), [integration](docs/integration.md), and [release protocol](docs/releasing.md) describe the contract.

The package has no ConfigProvider. Values are constructed directly; ports are supplied by the host. Deterministic pure operations do not capture a site, actor, request, connection or container. App owns authorization, transactions, persistence, dispatch and presentation.

Released consumers exact-pin pre-1.0 versions. Apache-2.0; inherited source behavior is preserved except the explicitly documented bounded-input decisions.

FieldPresentationModel takes an explicit CanonicalEncoder after the required flag. It preserves the SDK exact-value restrictions before calling the generic encoder. The encoder is not retained; App owns the implementation binding. See [dependency proposal](docs/dependency-decision.md) for the unverified candidates and original-ceiling amendment.
