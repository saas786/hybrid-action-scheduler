<?php
/**
 * Helper functions.
 */

namespace Hybrid\Action\Scheduler;

use function Hybrid\app;

function queue() {
    return app( 'hybrid/queue' );
}
