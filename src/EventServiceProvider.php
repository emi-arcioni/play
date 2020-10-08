<?php

namespace FuquIo\Play;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseServiceProvider;
use FuquIo\Play\Events\OrderCreated;
use FuquIo\Play\Listeners\LogOrderCreation;

class EventServiceProvider extends BaseServiceProvider
{
	protected $listen = [
		OrderCreated::class => [
            LogOrderCreation::class,
        ]
	];
	
	protected $subscribe = [
	];
	
	public function boot()
	{
		parent::boot();
	}
}
