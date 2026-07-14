<?php

/**
 * Queue facade.
 */

namespace Hybrid\Action\Scheduler\Facades;

use Hybrid\Core\Facades\Facade;

/**
 * @see \Hybrid\Action\Scheduler\Queue
 *
 * @method static string add(string $hook, array $args = [], string $group = '')
 * @method static string schedule_single(int $timestamp, string $hook, array $args = [], string $group = '')
 * @method static string schedule_recurring(int $timestamp, int $interval_in_seconds, string $hook, array $args = [], string $group = '')
 * @method static string schedule_cron(int $timestamp, string $cron_schedule, string $hook, array $args = [], string $group = '')
 * @method static void cancel(string $hook, array $args = [], string $group = '')
 * @method static void cancel_all(string $hook, array $args = [], string $group = '')
 * @method static \ActionScheduler_DateTime|null get_next(string $hook, array|null $args = null, string $group = '')
 * @method static array search(array $args = [], string $return_format = OBJECT)
 */
class Queue extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'hybrid/queue';
    }
}
