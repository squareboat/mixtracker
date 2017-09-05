<?php

namespace SquareBoat\Mixtracker;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


class Tracker implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create a new task instance.
     *
     * @return void
     */
    public function __construct($id, $event)
    {
        $this->id = $id;
        $this->event = $event;
        $this->mixPanel = app()->make('GeneaLabs\LaravelMixPanel\LaravelMixPanel');
    }

    /**
     * Track mixpanel event
     *
     * @return void
     */
    public function handle()
    {
        $this->mixPanel->identify($this->id);
        $this->mixPanel->track($this->event);
    }
}
