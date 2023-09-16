# Hybrid Action Scheduler

A background processing package for the Hybrid Core framework.

## Requirements

* WordPress 6.3.1+.
* PHP 8.0+ (8.1+ recommended).
* [Composer](https://getcomposer.org/) for managing PHP dependencies.

## Note

Either [Action Scheduler plugin](https://wordpress.org/plugins/action-scheduler/) should be installed,
or install manually.

```php
/*
 * Action scheduler.
 *
 * It needs to be called early because it hooks into `plugins_loaded`.
 *
 * @see https://actionscheduler.org/usage/#loading-action-scheduler
 */
require_once( plugin_dir_path( __FILE__ ) . '/libraries/action-scheduler/action-scheduler.php' );
```

## Copyright and License

This project is licensed under the [GNU GPL](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 or later.

2008&thinsp;&ndash;&thinsp;2023 &copy; [Theme Hybrid](https://themehybrid.com).
