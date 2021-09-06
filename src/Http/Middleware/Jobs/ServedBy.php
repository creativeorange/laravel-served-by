<?php

namespace Creativeorange\ServedBy\Http\Middleware\Jobs;

use Facade\Ignition\Facades\Flare;
use Laravel\Horizon\Horizon;

class ServedBy
{
    /**
     * Process the queued job.
     *
     * @param  mixed  $job
     * @param  callable  $next
     * @return mixed
     */
    public function handle($job, $next)
    {
        if (class_exists(Flare::class)) {
            Flare::context('X-Served-By', config('served-by.identifier-string'));
        }
        $next($job);
    }
}