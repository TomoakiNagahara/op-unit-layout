# Layout As-Is

## Scope

This document describes the current As-Is behavior and responsibility boundary of the Layout unit.

## Primary Responsibility

The Layout unit is responsible for final shared page framing when layout execution is enabled.

Its role is not to determine routing targets or execute endpoint business logic.

Its role is to take the already-prepared application content and apply layout output behavior.

## Current Flow

In the current implementation, `Layout::Auto()`:

1. reads layout config
2. checks whether layout execution is enabled
3. checks whether the current MIME is `text/html`
4. if layout should not run, outputs App content directly
5. if layout should run, loads the configured layout controller

## Responsibility Boundary

The Layout unit is responsible for:

- deciding whether to continue layout execution based on current layout config and current MIME
- loading the configured layout controller
- providing the final shared wrapper stage for HTML output

The Layout unit is not responsible for:

- deciding which endpoint should run
- executing router resolution
- deciding application flow before content exists

## Relationship to the App Unit

The App unit calls the Layout unit when the application flow reaches the layout stage.

The App unit owns application flow management.

The Layout unit owns the final layout behavior itself.

## Configuration Surface

The current Layout unit reads:

- `layout.name`
- `layout.controller`
- `layout.execute`

through the framework config system.

It also provides:

- `Name()`
- `Execute()`

for dynamic control of the layout state.

## Meaning

The important boundary is:

- App decides when to hand off to Layout
- Layout decides how shared final framing should be applied

