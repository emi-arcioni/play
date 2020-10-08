<?php

namespace FuquIo\Play\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use FuquIo\Play\Events\OrderCreated;
use Illuminate\Support\Facades\Log;

class LogOrderCreation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(OrderCreated $event)
    {
        Log::info($event->order->description);
    }
}
