<?php

namespace SquareBoat\Mixtracker;

use Illuminate\Config\Repository;
use Illuminate\Foundation\Bus\DispatchesJobs;

class Mixtracker {

    use DispatchesJobs;

    /**
     * The config implementation.
     *
     * @var \Illuminate\Config\Repository
     */
    private $config;

    /**
     * Create new mixtrackr instance.
     *
     * @param Illuminate\Config\Repository               $config
     * @param GeneaLabs\LaravelMixPanel\LaravelMixPanel  $mixPanel
     * @return void
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * Track mixpanel event.
     *
     * @param  integer $id
     * @param  string  $event
     * @return void
     */
    public function track($id, $event)
    {
        if (!$this->isSilent()){

            if ($this->config->get("mixtracker.events.{$event}")) {

                $this->dispatch(new Tracker($id, $this->config->get("mixtracker.events.{$event}")));

            }

        }
    }

    /**
     * Checks if mixtracker is silent.
     *
     * @return boolean
     */
    private function isSilent()
    {
        return $this->config->get('mixtracker.silent');
    }
}
