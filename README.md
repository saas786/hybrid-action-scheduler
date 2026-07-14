# Hybrid Action Scheduler

A background processing package for the Hybrid Core framework.

## Requirements

* WordPress 6.8+.
* PHP 8.2+.
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

## Registration

Register the service provider with your application:

```php
$app->register( \Hybrid\Action\Scheduler\ActionSchedulerServiceProvider::class );
```

This binds the `hybrid/queue` singleton, making it available via the `queue()` helper.

## Usage

The `queue()` helper, or the `Queue` facade, returns the `Queue` instance, which wraps
[Action Scheduler](https://actionscheduler.org/).

Using the helper:

```php
use function Hybrid\Action\Scheduler\queue;

queue()->add( 'my_hook', [ 'foo' => 'bar' ], 'my-group' );
```

Using the facade:

```php
use Hybrid\Action\Scheduler\Facades\Queue;

Queue::add( 'my_hook', [ 'foo' => 'bar' ], 'my-group' );
```

```php
// Run once, at a specific time.
Queue::schedule_single( strtotime( 'tomorrow' ), 'my_hook', [ 'foo' => 'bar' ], 'my-group' );

// Run repeatedly at a fixed interval (in seconds).
Queue::schedule_recurring( time(), DAY_IN_SECONDS, 'my_hook', [], 'my-group' );

// Run on a cron-style schedule.
Queue::schedule_cron( time(), '0 0 * * *', 'my_hook', [], 'my-group' );

// Cancel the next scheduled instance (and any recurring instances after it).
Queue::cancel( 'my_hook', [ 'foo' => 'bar' ], 'my-group' );

// Cancel all scheduled instances.
Queue::cancel_all( 'my_hook' );

// Get the next scheduled run time.
$next = Queue::get_next( 'my_hook' );

// Search for scheduled actions.
$actions = Queue::search( [ 'hook' => 'my_hook', 'status' => 'pending' ] );
```

Each `$hook` is a standard WordPress action, so hook into it like any other:

```php
add_action( 'my_hook', function ( $foo ) {
    // Handle the job.
} );
```

## Copyright and License

This project is licensed under the [GNU GPL](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 or later.

2008&thinsp;&ndash;&thinsp;2026 &copy; [Theme Hybrid](https://themehybrid.com).
