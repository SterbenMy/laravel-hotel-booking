<?php

namespace App\Listeners;

use App\Events\ResponseSent;
use Illuminate\Cache\Repository;

class ResponseProcessingListener
{
    private Repository $cache;

    public function __construct(Repository $cache)
    {
        $this->cache=$cache;
    }

    public function handle(ResponseSent $event): void
    {
        $value = $this->cache->get('statuses', []);
        $code = $event->code;

        $value[$code] = ($value[$code] ?? 0) + 1;

        $this->cache->set('statuses', $value);
    }


}
