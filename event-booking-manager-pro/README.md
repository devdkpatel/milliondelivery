# Event Booking Manager Pro

## Architecture

- PSR-4 Autoloading via Composer
- OOP with Namespaces
- MVC-style separation:
  - Controllers (hooks + REST)
  - Services (business logic)
  - Models (data)

## Core Components

- Custom Post Type: event
- Meta Fields:
  - date
  - time
  - location
  - seats
  - status

## REST API

GET /wp-json/ebmp/v1/events?limit=3

Returns upcoming events sorted ASC by date.

## Gutenberg Block

Dynamic SSR block:
- Event count control
- Show/Hide location

## Performance

- Removed unused Gutenberg CSS
- Deferred JS loading
- Server-side rendering
- REST-based fetching

## Decisions

Central Loader used to avoid scattered hooks.
Business logic separated into Services.
Models provide schema abstraction.

## Author

Deepak
