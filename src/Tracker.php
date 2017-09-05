<?php

namespace SquareBoat\Mixtracker;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


class Tracker implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Id to identify mixpanel profile.
     *
     */
    private $id;

    /**
     * Event name to be tracked.
     *
     */
    private $event;

    /**
     * Additional properties for tracked event.
     *
     */
    private $properties;

    /**
     * Create a new task instance.
     *
     * @return void
     */
    public function __construct($id, $event, $properties = [])
    {
        $this->id = $id;
        $this->event = $event;
        $this->properties = $properties;

    }

    /**
     * Track mixpanel event
     *
     * @return void
     */
    public function handle()
    {
        $mixPanel = app()->make('GeneaLabs\LaravelMixPanel\LaravelMixPanel');

        $mixPanel->identify($this->id);
        $mixPanel->track($this->event, $this->properties);
    }
}
