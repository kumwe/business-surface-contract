---
schema: "kumwe-migration-handoff/v2"
artifact_kind: "framework_php"
migration_id: "KUMWE-MIG-2026-038"
change_set: "KUMWE-CS-2026-034"
state: "draft_pr_open"
source:
  app:
    repository: "https://github.com/kumwe/app"
    baseline_commit: null
    examined_paths: []
    old_namespace_roots:
      - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\"
      - "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\"
    capability_index_sha256: null
  semantic_inputs:
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessActionCommand.php"
      sha256: "a9e645e6947d62849090ef257ec61477fc662ed7573f9497652f4c3a76fd7195"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessActionDeclaration.php"
      sha256: "bca42b6f43f6f3ac839339378ab532ce8624a5f08e07f2bd689680305ac5bb1f"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessActionHandler.php"
      sha256: "7377b5e765efd9462e1d2ab5e1e308bcc5be8ee8352cacf29e199df2939b0c46"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessActionResult.php"
      sha256: "60a5f3fd62e910dbd24fee60321a58c308bfad3fbb67ce52711a7bfe4f676bef"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessPayload.php"
      sha256: "53d0c02702f53598ca89da9574761397be29677cf2abc9354b7ee51ce9b568d2"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessReference.php"
      sha256: "9e1bddbf1bc8307cc175b0545067f5b64e969fc0153f14c7179a6c727e946b6e"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessSchema.php"
      sha256: "05627136b56f6f38cc1ced9dd31ad5fe5a918f8607110089842c407e5293b6a3"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessViewDeclaration.php"
      sha256: "6f0e80b21b0e8c0e24eeca38699db581923f06896aeb01c7f6557d53c607c65f"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessViewHandler.php"
      sha256: "8614610e768db6d2128a0cdff53fec6a35c4f34aea82cd5d8894f992e5476883"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessViewQuery.php"
      sha256: "0f808bd489289ca0c6b91fa07da488320c6950faa4053ff835eed739a9c2d950"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessViewResult.php"
      sha256: "ddaaa09ef142ab2dab8ed7ed75fdbb2073e608e89c317cbeaa7c757b954f13a2"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Presentation/Field/FieldPresentationConfiguration.php"
      sha256: "e9f101b2c790aba1edeec5c13f5f6bad9c9be82249ea31d3385d064b0ee6dd98"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Presentation/Field/FieldPresentationContext.php"
      sha256: "e98b0d9f83a346f67117db273b5f5ecf0e853267d3ca2f541c3fb0375b228253"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Presentation/Field/FieldPresentationContribution.php"
      sha256: "081850ab34da86da94cb9f20dfcf0ff4a034cf3240fb09ddf5e409b2137d0db4"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Presentation/Field/FieldPresentationInput.php"
      sha256: "bddddda25b4cd4b268665060b9dedf3fed1c6b5625e23491bbaab091ec838da2"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Presentation/Field/FieldPresentationModel.php"
      sha256: "6ccf85c3d6b72eb932162576b7a268661dca1cc62bb03f21e3adfc42f3eaa6dd"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Presentation/Field/FieldPresenter.php"
      sha256: "db29de557a82f75a56054fc1efe65da5ca81bada219f881431af468b7d8bb6ff"
    -
      owner: "https://github.com/kumwe/extension-sdk"
      version_or_commit: "e8ec23f155c5836c6bd083f154a8efb6e50aec66"
      manifest_or_corpus: "src/Spi/BusinessSurface/Presentation/Field/FieldWidget.php"
      sha256: "6fb5ece41652e438a2570791ebe767450da2a26e82fae9789100c2a402e87ba7"
  examined_dependencies:
    - "php ^8.5"
    - "ext-mbstring *"
    - "kumwe/access-context 0.1.0"
    - "kumwe/contribution 0.1.0"
    - "kumwe/conversion 0.1.0"
    - "kumwe/canonical-json 0.1.1"
    - "kumwe/idempotency 0.1.0"
    - "kumwe/record-model 0.1.0"
    - "kumwe/record-query 0.1.0"
    - "kumwe/record-values 0.1.0"
  active_related_pull_requests: []
target:
  repository: "https://github.com/kumwe/business-surface-contract"
  artifact_identity: "kumwe/business-surface-contract"
  canonical_namespace_or_abi: "Kumwe\\BusinessSurface\\Contract\\"
  branch: "codex/extraction-readiness-20260907"
  pull_request: "https://github.com/kumwe/business-surface-contract/pull/6"
ownership:
  responsibility: "Portable custom business action, view and field presentation contracts."
  non_responsibilities:
    - "authorization"
    - "transactions"
    - "persistence adapters"
    - "active registries"
    - "trust and lifecycle"
    - "HTTP and rendering"
  allowed_dependency_ceiling:
    - "kumwe/contribution"
    - "kumwe/access-context"
    - "kumwe/access-control"
    - "kumwe/business-definition"
    - "kumwe/record-query"
  implementation_owner: "kumwe/business-surface-contract"
  next_consumer: "kumwe/app"
  public_manifests:
    -
      path: "resources/public-api/v1.json"
      sha256: "5bcb0cafe6e3a620c5d4a336c5d39f705a214cd202072f5a920a2b072375c23f"
    -
      path: "resources/capabilities/v1.json"
      sha256: "55c5bd0a780705a490f59066d7fb154f0b7bce2f40dab735a657bc22b110f195"
    -
      path: "resources/service-map/v1.json"
      sha256: "5580e28b2516cd343f5561c04e6086b6f0c611e76a0e06ca8b23afad56ee632a"
    -
      path: "resources/public-api/signature-details-v1.json"
      sha256: "e93281879913066fd5455e465fc04e8507ac192a7737f14f890011a20d05f164"
  intentionally_excluded:
    - "SDK HTTP bindings and renderers remain host-owned"
framework_php:
  composer_package: "kumwe/business-surface-contract"
  canonical_namespace: "Kumwe\\BusinessSurface\\Contract\\"
  public_api_manifest: "resources/public-api/v1.json"
  capability_manifest: "resources/capabilities/v1.json"
  service_map: "resources/service-map/v1.json"
  extracted_symbols:
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessActionCommand"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessActionCommand"
      source_path: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessActionCommand.php"
      target_path: "src/Application/Custom/CustomBusinessActionCommand.php"
      kind: "class"
      public_methods:
        - "__construct"
      public_properties:
        - "context"
        - "definitionIdentifier"
        - "recordId"
        - "expectedVersion"
        - "action"
        - "idempotencyKey"
        - "input"
        - "organizationIdentifier"
        - "approvalRequestId"
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions: []
      serialization_contract: null
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessActionDeclaration"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessActionDeclaration"
      source_path: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessActionDeclaration.php"
      target_path: "src/Application/Custom/CustomBusinessActionDeclaration.php"
      kind: "class"
      public_methods:
        - "fromManifest"
        - "toArray"
      public_properties:
        - "handler"
        - "schema"
        - "commandSchema"
        - "resultSchema"
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions:
        - "InvalidArgumentException"
      serialization_contract: "Public toArray shape is documented in docs/public-api.md and covered by package-owned tests."
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessActionHandler"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessActionHandler"
      source_path: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessActionHandler.php"
      target_path: "src/Application/Custom/CustomBusinessActionHandler.php"
      kind: "interface"
      public_methods:
        - "handle"
      public_properties: []
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions: []
      serialization_contract: null
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessActionResult"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessActionResult"
      source_path: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessActionResult.php"
      target_path: "src/Application/Custom/CustomBusinessActionResult.php"
      kind: "class"
      public_methods:
        - "__construct"
      public_properties:
        - "data"
        - "recordVersion"
        - "operationId"
        - "replayed"
        - "workflowState"
        - "deleted"
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions: []
      serialization_contract: null
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessPayload"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessPayload"
      source_path: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessPayload.php"
      target_path: "src/Application/Custom/CustomBusinessPayload.php"
      kind: "class"
      public_methods:
        - "assertObject"
      public_properties: []
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions:
        - "InvalidArgumentException"
      serialization_contract: null
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessReference"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessReference"
      source_path: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessReference.php"
      target_path: "src/Application/Custom/CustomBusinessReference.php"
      kind: "class"
      public_methods:
        - "assert"
      public_properties: []
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions:
        - "InvalidArgumentException"
      serialization_contract: null
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessSchema"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessSchema"
      source_path: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessSchema.php"
      target_path: "src/Application/Custom/CustomBusinessSchema.php"
      kind: "class"
      public_methods:
        - "__construct"
        - "fromArray"
        - "toArray"
        - "assertValid"
      public_properties: []
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions:
        - "InvalidArgumentException"
      serialization_contract: "Public toArray shape is documented in docs/public-api.md and covered by package-owned tests."
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessViewDeclaration"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessViewDeclaration"
      source_path: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessViewDeclaration.php"
      target_path: "src/Application/Custom/CustomBusinessViewDeclaration.php"
      kind: "class"
      public_methods:
        - "fromManifest"
        - "toArray"
      public_properties:
        - "handler"
        - "schema"
        - "querySchema"
        - "resultSchema"
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions:
        - "InvalidArgumentException"
      serialization_contract: "Public toArray shape is documented in docs/public-api.md and covered by package-owned tests."
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessViewHandler"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessViewHandler"
      source_path: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessViewHandler.php"
      target_path: "src/Application/Custom/CustomBusinessViewHandler.php"
      kind: "interface"
      public_methods:
        - "handle"
      public_properties: []
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions: []
      serialization_contract: null
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessViewQuery"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessViewQuery"
      source_path: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessViewQuery.php"
      target_path: "src/Application/Custom/CustomBusinessViewQuery.php"
      kind: "class"
      public_methods:
        - "__construct"
      public_properties:
        - "context"
        - "definitionIdentifier"
        - "view"
        - "records"
        - "parameters"
        - "organizationIdentifier"
        - "recordId"
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions: []
      serialization_contract: null
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessViewResult"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessViewResult"
      source_path: "src/Spi/BusinessSurface/Application/Custom/CustomBusinessViewResult.php"
      target_path: "src/Application/Custom/CustomBusinessViewResult.php"
      kind: "class"
      public_methods:
        - "__construct"
      public_properties:
        - "data"
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions: []
      serialization_contract: null
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresentationConfiguration"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresentationConfiguration"
      source_path: "src/Spi/BusinessSurface/Presentation/Field/FieldPresentationConfiguration.php"
      target_path: "src/Presentation/Field/FieldPresentationConfiguration.php"
      kind: "class"
      public_methods:
        - "fromArray"
        - "empty"
        - "get"
        - "toArray"
      public_properties: []
      public_constants:
        - "MAXIMUM_KEYS"
        - "MAXIMUM_LIST_ITEMS"
        - "MAXIMUM_STRING_BYTES"
        - "MAXIMUM_BYTES"
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions:
        - "InvalidArgumentException"
      serialization_contract: "Public toArray shape is documented in docs/public-api.md and covered by package-owned tests."
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresentationContext"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresentationContext"
      source_path: "src/Spi/BusinessSurface/Presentation/Field/FieldPresentationContext.php"
      target_path: "src/Presentation/Field/FieldPresentationContext.php"
      kind: "enum"
      public_methods:
        - "edits"
        - "cases"
        - "from"
        - "tryFrom"
      public_properties:
        - "name"
        - "value"
      public_constants:
        - "List"
        - "Detail"
        - "Create"
        - "Update"
        - "Filter"
        - "Relation"
        - "History"
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions: []
      serialization_contract: null
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresentationContribution"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresentationContribution"
      source_path: "src/Spi/BusinessSurface/Presentation/Field/FieldPresentationContribution.php"
      target_path: "src/Presentation/Field/FieldPresentationContribution.php"
      kind: "class"
      public_methods:
        - "__construct"
        - "fromArray"
        - "identifier"
        - "toArray"
      public_properties:
        - "contexts"
        - "fieldType"
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions:
        - "InvalidArgumentException"
      serialization_contract: "Public toArray shape is documented in docs/public-api.md and covered by package-owned tests."
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresentationInput"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresentationInput"
      source_path: "src/Spi/BusinessSurface/Presentation/Field/FieldPresentationInput.php"
      target_path: "src/Presentation/Field/FieldPresentationInput.php"
      kind: "class"
      public_methods:
        - "__construct"
        - "permitsEditing"
      public_properties:
        - "value"
        - "configuration"
        - "handle"
        - "label"
        - "fieldType"
        - "required"
        - "readOnly"
        - "computed"
        - "serverOnly"
        - "immutableAfterCreate"
        - "context"
        - "locale"
        - "errors"
        - "editable"
        - "length"
        - "precision"
        - "scale"
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions:
        - "InvalidArgumentException"
      serialization_contract: null
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresentationModel"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresentationModel"
      source_path: "src/Spi/BusinessSurface/Presentation/Field/FieldPresentationModel.php"
      target_path: "src/Presentation/Field/FieldPresentationModel.php"
      kind: "class"
      public_methods:
        - "__construct"
        - "toArray"
      public_properties:
        - "handle"
        - "label"
        - "context"
        - "widget"
        - "display"
        - "inputValue"
        - "editable"
        - "required"
        - "errors"
        - "options"
        - "attributes"
        - "provenance"
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions:
        - "InvalidArgumentException"
      serialization_contract: "Public toArray shape is documented in docs/public-api.md and covered by package-owned tests."
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresenter"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresenter"
      source_path: "src/Spi/BusinessSurface/Presentation/Field/FieldPresenter.php"
      target_path: "src/Presentation/Field/FieldPresenter.php"
      kind: "interface"
      public_methods:
        - "present"
      public_properties: []
      public_constants: []
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions: []
      serialization_contract: null
    -
      old_fqcn: "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldWidget"
      new_fqcn: "Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldWidget"
      source_path: "src/Spi/BusinessSurface/Presentation/Field/FieldWidget.php"
      target_path: "src/Presentation/Field/FieldWidget.php"
      kind: "enum"
      public_methods:
        - "cases"
        - "from"
        - "tryFrom"
      public_properties:
        - "name"
        - "value"
      public_constants:
        - "Output"
        - "Text"
        - "Textarea"
        - "Integer"
        - "Decimal"
        - "Checkbox"
        - "Select"
        - "Date"
        - "Time"
        - "DateTime"
        - "Email"
        - "Url"
        - "Phone"
        - "Money"
        - "Quantity"
        - "ZonedDateTime"
        - "MediaReference"
        - "EntityReference"
        - "Json"
        - "Collection"
        - "Secret"
      compatibility: "Canonical namespace ownership move; see COMPATIBILITY.md for validation changes and docs/public-api.md for exact signatures."
      exceptions: []
      serialization_contract: null
  consumers:
    app_code:
      - "src/BusinessDefinition/Application/BusinessDefinitionValidator.php"
      - "src/BusinessSurface/Application/BusinessOperationStatusService.php"
      - "src/BusinessSurface/Application/BusinessSurfaceService.php"
      - "src/BusinessSurface/Application/Custom/CustomBusinessActionHandlerRegistry.php"
      - "src/BusinessSurface/Application/Custom/CustomBusinessActionLedgerResult.php"
      - "src/BusinessSurface/Application/Custom/CustomBusinessSurfaceDispatcher.php"
      - "src/BusinessSurface/Application/Custom/CustomBusinessViewHandlerRegistry.php"
      - "src/BusinessSurface/Application/CustomBusinessActionExecutor.php"
      - "src/BusinessSurface/Delivery/Browser/BusinessFormInputMapper.php"
      - "src/BusinessSurface/Delivery/Browser/BusinessSchemaForm.php"
      - "src/BusinessSurface/Presentation/Field/CoreFieldPresenter.php"
      - "src/BusinessSurface/Presentation/Field/FieldPresentationCoverage.php"
      - "src/BusinessSurface/Presentation/Field/FieldPresentationInputFactory.php"
      - "src/BusinessSurface/Presentation/Field/FieldPresentationRegistry.php"
      - "src/BusinessSurface/Presentation/Field/RegistryFieldModelPresenter.php"
      - "src/Extension/Contribution/BusinessContributionSurface.php"
      - "src/Extension/Contribution/CanonicalManifestInterpreter.php"
      - "src/Extension/Contribution/CoreContributionRegistrar.php"
      - "src/Extension/Contribution/CoreExtensionContributions.php"
      - "src/Extension/Contribution/OwnedExtensionBindingRegistrar.php"
      - "src/OpenApi/Application/OpenApiContractCompiler.php"
    configuration_and_di: []
    reflection_and_string_references: []
    fixtures_and_examples: []
    external:
      - "kumwe/extension-sdk successor deletes moved SDK declarations"
  dependency_injection:
    mode: "direct"
    provider: null
    factories: []
    aliases: []
    service_lifetimes: []
    configuration_keys: []
    provider_absence_reason: "DTO constructor receives CanonicalEncoder explicitly for byte validation and does not retain it. No injected runtime service is exported."
native_cpp: null
php_extension: null
tests:
  moved_or_added:
    - "tests/Case/CustomBusinessDeclarationTest.php"
    - "tests/Case/CustomBusinessPortTest.php"
    - "tests/Case/FieldInputBoundaryTest.php"
    - "tests/Case/FieldPresentationSecurityTest.php"
    - "tests/Case/SurfaceContractConformanceTest.php"
  remain_in_app_or_consumer:
    - "tests/Architecture/BusinessSurfaceRenderingSeamTest.php"
    - "tests/Architecture/ConvertedMoneySurfaceCoverageTest.php"
    - "tests/Architecture/CustomBusinessHandlerBoundaryTest.php"
    - "tests/Integration/BusinessSurface/GeneratedBusinessBrowserIntegrationTest.php"
    - "tests/Integration/Extension/AssetInspectionCustomViewIntegrationTest.php"
    - "tests/Unit/BusinessDefinition/Domain/EntityTypeDefinitionTest.php"
    - "tests/Unit/BusinessSurface/Application/Custom/CustomBusinessActionExecutorTest.php"
    - "tests/Unit/BusinessSurface/Application/Custom/CustomBusinessHandlerRegistryTest.php"
    - "tests/Unit/BusinessSurface/Delivery/Browser/BusinessFormInputMapperTest.php"
    - "tests/Unit/BusinessSurface/Presentation/Field/CoreFieldPresenterTest.php"
    - "tests/Unit/BusinessSurface/Presentation/FieldPresentationRegistryTest.php"
    - "tests/Unit/BusinessSurface/Presentation/RegistryFieldModelPresenterTest.php"
    - "tests/Unit/BusinessSurface/Presentation/SeverityFieldPresenterTest.php"
    - "tests/Unit/Delivery/Http/Api/Business/BusinessOperationStatusApiHandlerTest.php"
    - "tests/Unit/Extension/Contribution/CustomBusinessHandlerBindingTest.php"
    - "tests/Unit/Extension/Contribution/ExtensionBindingSurfaceTest.php"
    - "tests/Unit/Extension/Contribution/OwnedBindingCanonicalDriftTest.php"
  split_tests:
    - "SDK tests/Case/PortableValueBoundaryTest.php: move testCustomDeclarationsValidatePayloadsAgainstTheirClosedSchema; retain unrelated declaration/disclosure/preview tests with their canonical owners."
  prohibited_duplicates:
    - "SDK tests/Case/CustomBusinessPortTest.php"
    - "SDK tests/Case/FieldPresentationSecurityTest.php"
  corpora:
    - "tests/Case/CustomBusinessDeclarationTest.php"
    - "tests/Case/CustomBusinessPortTest.php"
    - "tests/Case/FieldInputBoundaryTest.php"
    - "tests/Case/FieldPresentationSecurityTest.php"
    - "tests/Case/SurfaceContractConformanceTest.php"
documentation:
  charter: "CHARTER.md"
  readme: "README.md"
  public_api: "docs/public-api.md"
  architecture: "docs/architecture.md"
  integration_or_consumer: "docs/integration.md"
  examples:
    - "examples/standalone.php"
  changelog_record: "CHANGELOG.md#0.1.2"
release_expectations:
  version_policy: "SemVer; 0.1.2 candidate source release record, published baseline 0.1.1. Exact consumer pins follow independent artifact verification."
  expected_artifact_types:
    - "Composer ZIP"
  required_checks:
    - "@composer:validate"
    - "@lint"
    - "@api"
    - "@architecture"
    - "@analyse"
    - "@cs"
    - "@test"
    - "@examples"
    - "@security"
    - "@clean-consumer"
    - "@manifests"
  required_registry_or_installer: "Composer"
  required_external_attestation: true
next_task:
  phase_name: "Independent release verification, followed by separately authorized App Phase 2"
  permitted_only_when:
    - "Human review and merge"
    - "All dependencies and this release independently attested"
    - "Current App drift reconciled upstream"
  consumer_repository: "https://github.com/kumwe/app"
  dependency_or_native_change: "After publication and independent verification, adopt exact kumwe/business-surface-contract 0.1.2 with its verified stable dependency graph; no floating latest or dev aliases."
  namespace_or_api_replacements:
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessActionCommand -> Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessActionCommand"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessActionDeclaration -> Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessActionDeclaration"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessActionHandler -> Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessActionHandler"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessActionResult -> Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessActionResult"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessPayload -> Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessPayload"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessReference -> Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessReference"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessSchema -> Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessSchema"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessViewDeclaration -> Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessViewDeclaration"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessViewHandler -> Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessViewHandler"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessViewQuery -> Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessViewQuery"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Application\\Custom\\CustomBusinessViewResult -> Kumwe\\BusinessSurface\\Contract\\Application\\Custom\\CustomBusinessViewResult"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresentationConfiguration -> Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresentationConfiguration"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresentationContext -> Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresentationContext"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresentationContribution -> Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresentationContribution"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresentationInput -> Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresentationInput"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresentationModel -> Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresentationModel"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldPresenter -> Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldPresenter"
    - "Kumwe\\Extension\\Spi\\BusinessSurface\\Presentation\\Field\\FieldWidget -> Kumwe\\BusinessSurface\\Contract\\Presentation\\Field\\FieldWidget"
  files_to_update:
    - "src/BusinessDefinition/Application/BusinessDefinitionValidator.php"
    - "src/BusinessSurface/Application/BusinessOperationStatusService.php"
    - "src/BusinessSurface/Application/BusinessSurfaceService.php"
    - "src/BusinessSurface/Application/Custom/CustomBusinessActionHandlerRegistry.php"
    - "src/BusinessSurface/Application/Custom/CustomBusinessActionLedgerResult.php"
    - "src/BusinessSurface/Application/Custom/CustomBusinessSurfaceDispatcher.php"
    - "src/BusinessSurface/Application/Custom/CustomBusinessViewHandlerRegistry.php"
    - "src/BusinessSurface/Application/CustomBusinessActionExecutor.php"
    - "src/BusinessSurface/Delivery/Browser/BusinessFormInputMapper.php"
    - "src/BusinessSurface/Delivery/Browser/BusinessSchemaForm.php"
    - "src/BusinessSurface/Presentation/Field/CoreFieldPresenter.php"
    - "src/BusinessSurface/Presentation/Field/FieldPresentationCoverage.php"
    - "src/BusinessSurface/Presentation/Field/FieldPresentationInputFactory.php"
    - "src/BusinessSurface/Presentation/Field/FieldPresentationRegistry.php"
    - "src/BusinessSurface/Presentation/Field/RegistryFieldModelPresenter.php"
    - "src/Extension/Contribution/BusinessContributionSurface.php"
    - "src/Extension/Contribution/CanonicalManifestInterpreter.php"
    - "src/Extension/Contribution/CoreContributionRegistrar.php"
    - "src/Extension/Contribution/CoreExtensionContributions.php"
    - "src/Extension/Contribution/OwnedExtensionBindingRegistrar.php"
    - "src/OpenApi/Application/OpenApiContractCompiler.php"
    - "tests/Architecture/BusinessSurfaceRenderingSeamTest.php"
    - "tests/Architecture/ConvertedMoneySurfaceCoverageTest.php"
    - "tests/Architecture/CustomBusinessHandlerBoundaryTest.php"
    - "tests/Integration/BusinessSurface/GeneratedBusinessBrowserIntegrationTest.php"
    - "tests/Integration/Extension/AssetInspectionCustomViewIntegrationTest.php"
    - "tests/Unit/BusinessDefinition/Domain/EntityTypeDefinitionTest.php"
    - "tests/Unit/BusinessSurface/Application/Custom/CustomBusinessActionExecutorTest.php"
    - "tests/Unit/BusinessSurface/Application/Custom/CustomBusinessHandlerRegistryTest.php"
    - "tests/Unit/BusinessSurface/Delivery/Browser/BusinessFormInputMapperTest.php"
    - "tests/Unit/BusinessSurface/Presentation/Field/CoreFieldPresenterTest.php"
    - "tests/Unit/BusinessSurface/Presentation/FieldPresentationRegistryTest.php"
    - "tests/Unit/BusinessSurface/Presentation/RegistryFieldModelPresenterTest.php"
    - "tests/Unit/BusinessSurface/Presentation/SeverityFieldPresenterTest.php"
    - "tests/Unit/Delivery/Http/Api/Business/BusinessOperationStatusApiHandlerTest.php"
    - "tests/Unit/Extension/Contribution/CustomBusinessHandlerBindingTest.php"
    - "tests/Unit/Extension/Contribution/ExtensionBindingSurfaceTest.php"
    - "tests/Unit/Extension/Contribution/OwnedBindingCanonicalDriftTest.php"
    - "composer.json"
    - "composer.lock"
  files_to_remove: []
  tests_to_remove: []
  tests_to_retain_or_add:
    - "tests/Architecture/BusinessSurfaceRenderingSeamTest.php"
    - "tests/Architecture/ConvertedMoneySurfaceCoverageTest.php"
    - "tests/Architecture/CustomBusinessHandlerBoundaryTest.php"
    - "tests/Integration/BusinessSurface/GeneratedBusinessBrowserIntegrationTest.php"
    - "tests/Integration/Extension/AssetInspectionCustomViewIntegrationTest.php"
    - "tests/Unit/BusinessDefinition/Domain/EntityTypeDefinitionTest.php"
    - "tests/Unit/BusinessSurface/Application/Custom/CustomBusinessActionExecutorTest.php"
    - "tests/Unit/BusinessSurface/Application/Custom/CustomBusinessHandlerRegistryTest.php"
    - "tests/Unit/BusinessSurface/Delivery/Browser/BusinessFormInputMapperTest.php"
    - "tests/Unit/BusinessSurface/Presentation/Field/CoreFieldPresenterTest.php"
    - "tests/Unit/BusinessSurface/Presentation/FieldPresentationRegistryTest.php"
    - "tests/Unit/BusinessSurface/Presentation/RegistryFieldModelPresenterTest.php"
    - "tests/Unit/BusinessSurface/Presentation/SeverityFieldPresenterTest.php"
    - "tests/Unit/Delivery/Http/Api/Business/BusinessOperationStatusApiHandlerTest.php"
    - "tests/Unit/Extension/Contribution/CustomBusinessHandlerBindingTest.php"
    - "tests/Unit/Extension/Contribution/ExtensionBindingSurfaceTest.php"
    - "tests/Unit/Extension/Contribution/OwnedBindingCanonicalDriftTest.php"
  di_or_provisioning_changes:
    - "Adapt field presentation constructor call sites to pass explicit CanonicalEncoder; host owns native adapter binding."
    - "SDK successor removes exact mapped declarations and imports canonical owners; App phase remains separate."
  capability_index_changes:
    - "Replace implementation owner with exact verified package manifest"
  changelog_and_evidence_changes:
    - "Record enabling-refactor; completion_claim false"
  verification_commands:
    - "composer validate --strict"
    - "composer check"
    - "Applicable App integration, database, authority and delivery tests"
concurrency:
  likely_conflict_files:
    - "composer.json"
    - "composer.lock"
  related_migrations:
    - "KUMWE-MIG-2026-004"
    - "KUMWE-MIG-2026-005"
    - "KUMWE-MIG-2026-006"
    - "KUMWE-MIG-2026-009"
  ownership_conflicts:
    - "SDK successor must remove old definitions in coordination"
  integration_train: null
  resolution_rule: "semantic-preservation"
governance:
  roadmap_source_sha256: "a202155ef1a65f5ab293d4f8397ebf4ac430db7f1e877c776bbe7851e6fe18d8"
  roadmap_refs: []
  non_roadmap_refs:
    - "NRM-2026-038"
  completion_claim: false
decisions:
  - "Explicit namespace/API ownership move; no SDK runtime dependency or aliases"
  - "FieldPresentationModel requires CanonicalEncoder after required; stricter SDK exact-value prevalidation is retained"
  - "Use canonical RecordModel guard and IdempotencyKey; no foreign helper duplication"
  - "Dependency ceiling amendment is a proposal, not approved silently"
  - "BSC-002 explicitly limits retained inputs to 100000 nodes to match GenericV1; exact accepted/refused boundary tests cover the intentional initial-contract restriction."
  - "Full original source digests remain in docs/source-map.json; governed extracted-symbol inventory uses the exact v2 schema."
  - "Owner package contracts are implemented; App adoption and legacy deletion remain a separate consumer phase."
  - "Existing signatures reuse Canonical JSON, Conversion, Record Model, Record Values and Idempotency beyond the original brief ceiling; see docs/readiness-review.md."
blockers:
  - "Review and merge the 0.1.2 source release record after required CI passes."
  - "Verify default-branch publication, exact artifact digest and independent release verification before App adoption."
  - "The public-signature dependency ceiling amendment in docs/readiness-review.md requires architecture review; it is not silently approved."
---
# Migration handoff

## Migration/implementation summary

Field presentation inputs validate canonical record values and detach nested array references. Presentation output rejects leaked secrets, display-context editors and mutable metadata references. Custom payloads reject mutable PHP references. Redundant direct dependencies are removed. This branch records candidate 0.1.2; the published baseline is 0.1.1.

## Public API and responsibility

Portable custom business action, view and field presentation contracts. The governed API, capability and service manifests above enumerate the complete public surface. resources/public-api/signature-details-v1.json and docs/public-api.md preserve parameter defaults and constant values outside the closed governed schema. See docs/readiness-review.md for closure and host exclusions. No ConfigProvider is needed for directly constructed values, pure algorithms and ports.

## Capability reuse/semantic input review

The examined source files and semantic input digests above preserve extraction provenance. docs/dependency-decision.md records actual stable tag identities. No implementation source is relabeled as a stable release, and no App/SDK runtime dependency is introduced. The existing signature closure exceeds the original catalogue ceiling; its concrete dependency amendment remains an explicit architecture review blocker. The current App baseline was inspected read-only; no App source or tests were changed.

## Consumer inventory

The framework consumer inventory covers App production references, configuration/DI, string/reflection use, fixtures and external SDK bindings. The next-task file lists identify namespace replacements and legacy removals. Refresh those lists against the consumer current commit before integration. HTTP handlers, template rendering, active registries, authorization and infrastructure remain host concerns.

## Test ownership

All portable behavior, boundary regressions and the three strategy-interface conformance fixtures are owned by this repository. See docs/test-ownership.md for the executable ownership map. The machine-readable test inventory lists package tests, consumer tests to retain, split tests and prohibited duplicates. App acceptance and integration tests are retained for the later adoption phase. They were not run or claimed by this review.

## Next-task execution notes

Merge only after required package checks pass. Publish through the existing default-branch release workflow, independently verify the actual archive, then advance the exact dependency pins as a coherent consumer train. The next-task block provides the concrete App changes for that later phase. Completed extraction implementation is documented as present behavior; publication and App acceptance remain open gates.

## Drift check

API JSON, signature details and Markdown are generated from source reflection and checked for byte drift. Capability and service maps use the actual App v2 governance schemas. Handoff manifest hashes describe this source tree. This is a candidate record and keeps completion_claim false; no release-verification attestation has been fabricated.

## Validation recipe and observed local results

Run composer validate --strict and composer check on PHP 8.5 with real stable dependencies. Local PHP 8.5.10 source validation passed 16 tests, 87 assertions, PHPStan at the configured maximum level, coding standards, syntax, architecture and API drift checks. Where registry access was unavailable, local source validation used dependencies archived from exact published Git tags. The complete Package CI passed at source commit 9b24545550f545827e9c60dbbf4b43a3a50b9867 ([run 34162343699](https://github.com/kumwe/business-surface-contract/actions/runs/34162343699)), including real Composer installation, security audit, package tests, release automation and the clean built-archive consumer. The same-branch handoff/schema-gate follow-up must also pass required checks before merge. The actual App PackageManifests::read parser was also used read-only to check this package governed manifests and handoff.

The 0.1.2 dependency readiness gate compares all exact Kumwe production requirements with their
recorded evidence coordinates and rejects stale, missing or extra entries. Null attestations remain
explicitly unverified. Coordinated Record Model and Record Query successors must be published before
selecting the final dependency tuple; no App integration changes are part of this candidate.
