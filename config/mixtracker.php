<?php

    return [
        /**
         * Tracks mixpanel event or be silent.
         *
         */
        'silent' => env('MIXTRACKER_SILENT', true),

        /**
         *  Events for tracking in mixpanel.
         *
         */
        'events' => [

            'test' => 'test_event',

        ]

    ];
