# Change Log

You can see the changes made via the [commit log](https://github.com/themehybrid/hybrid-action-scheduler/commits/master) for the latest release.

## [1.0.2] - 2026-07-14

### Added
- `Queue` facade (`Hybrid\Action\Scheduler\Facades\Queue`) for static access to the queue singleton.
- README documentation for provider registration and queue usage (helper + facade).

### Changed
- Bumped `woocommerce/action-scheduler` dependency to `^4.0.0`.
- Raised minimum PHP requirement to 8.2.
- Raised minimum WordPress requirement to 6.8.
- Updated copyright year to 2026.

### Renamed
- `src/Provider.php` renamed to `src/ActionSchedulerServiceProvider.php` (class `Provider` → `ActionSchedulerServiceProvider`).

### Fixed
- Minor code style violations flagged by PHPCS.

## [1.0.1] - 2024-08-02

### Changed

- Bump composer packages
- Add composer sort-packages configuration
- Update copyright date
- Update lint php

## [1.0.0] - 2023-09-16

### Added

- Launch.  Everything's new!
