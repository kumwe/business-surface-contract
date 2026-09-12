# Kumwe Business Surface Contract

[![Packagist version][version-badge]][packagist]
[![Package CI][ci-badge]][ci]
[![PHP requirement][php-badge]](composer.json)
[![License: Apache-2.0][license-badge]](LICENSE)

Portable custom business action, view and field presentation contracts under `Kumwe\BusinessSurface\Contract\`.
The package defines typed handler inputs/results, bounded field presentation models and explicit strategy ports.
Core owns authorization, persistence, transaction boundaries, dispatch, rendering and operational recovery.

## Installation and usage

```sh
composer require kumwe/business-surface-contract:0.1.3
```

Requires PHP 8.5 and mbstring. [Composer metadata](composer.json) pins the exact published Kumwe dependencies,
which resolve through Packagist without custom VCS overrides. Values are constructed directly and host ports are
explicit inputs; no ConfigProvider or captured actor/site/request/container context is registered.

`FieldPresentationModel` receives an explicit `CanonicalEncoder` after the required flag. It validates approved
exact-value inputs before encoding, and does not retain the encoder. Core selects its implementation binding.
See the [standalone example](examples/standalone.php), [public API](docs/public-api.md),
[Core contract](docs/core-contract.md) and [integration](docs/integration.md).

## Boundaries and compatibility

Secret editors cannot retain values; read contexts cannot enable editing. Field inputs preserve approved
immutable domain values and reject arbitrary objects, callbacks, floats and resources. Retained arrays detach
caller references and enforce depth, width, node and byte limits. Custom payloads/results reject references that
could mutate an already validated readonly value. See [compatibility](COMPATIBILITY.md) and
[contract guarantees](docs/readiness-review.md).

Published versions, package CI, independent verification and Core acceptance remain separate observations.
Pre-1.0 consumers select an exact verified version. [Dependency status](docs/dependency-decision.md) records the
current graph; [architecture](docs/architecture.md) preserves the ownership boundary.

## Development

```sh
npm ci --prefix tools/schema-validator --ignore-scripts
composer install
composer check
composer examples
```

Node.js 20+ runs the pinned complete Draft 2020-12 schema validator. The package gate also checks source/API,
architecture, static analysis, coding standards, behavior/conformance, exact dependencies, examples, security and
a fresh no-dev archive consumer. Development tooling is excluded from production archives. See
[test ownership](docs/test-ownership.md), [releasing](docs/releasing.md), [release record](docs/release-record.md)
and [security](SECURITY.md).

[version-badge]: https://img.shields.io/packagist/v/kumwe/business-surface-contract
[packagist]: https://packagist.org/packages/kumwe/business-surface-contract
[ci-badge]: https://github.com/kumwe/business-surface-contract/actions/workflows/ci.yml/badge.svg?branch=main
[ci]: https://github.com/kumwe/business-surface-contract/actions/workflows/ci.yml
[php-badge]: https://img.shields.io/packagist/dependency-v/kumwe/business-surface-contract/php
[license-badge]: https://img.shields.io/github/license/kumwe/business-surface-contract
