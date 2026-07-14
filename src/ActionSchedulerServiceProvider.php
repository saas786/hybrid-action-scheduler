<?php
/**
 * Action scheduler service provider.
 */

namespace Hybrid\Action\Scheduler;

use Hybrid\Core\ServiceProvider;

/**
 * Action Scheduler provider class.
 */
class ActionSchedulerServiceProvider extends ServiceProvider {

    /**
     * Register.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton( 'hybrid/queue', static fn( $container ) => new Queue() );
    }

}
