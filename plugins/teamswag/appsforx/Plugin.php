<?php namespace Teamswag\Appsforx;

use System\Classes\PluginBase;
use Backend;
use Controller;
use Event;

/**
 * Appsforx Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Appsforx',
            'description' => 'Plugin to create Appsforx events',
            'author'      => 'Teamswag',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerPermissions()
    {
        return [
            'teamswag.appsforx.access_events' => ['tab' => 'Events', 'label' => 'teamswag.appsforx::lang.event.access_events'],
            'teamswag.appsforx.access_speakers' => ['tab' => 'Speaker', 'label' => 'teamswag.appsforx::lang.event.access_speakers']
        ];
    }

    public function registerComponents()
    {
        return [
            'Teamswag\Appsforx\Components\Events' => 'events',
            'Teamswag\Appsforx\Components\Speakers' => 'speakers',
            'Teamswag\Appsforx\Components\Sessions' => 'sessions',
            'Teamswag\Appsforx\Components\Event' => 'event'
        ];
    }

    public function boot()
    {
        \App::register('Laracasts\Generators\GeneratorsServiceProvider');
    }

    public function registerNavigation()
    {
        return [
            'appsforx' => [
                'label'       => 'Appsfor X',
                'url'         => Backend::url('teamswag/appsforx/events'),
                'icon'        => 'icon-pencil',
                'permissions' => ['teamswag.appsforx.*'],
                'order'       => 500,

                'sideMenu' => [
                    'events' => [
                        'label'       => 'Events',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('teamswag/appsforx/events'),
                        'permissions' => ['* ']
                    ],
                    'sessions' => [
                        'label'       => 'Sessions',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('teamswag/appsforx/sessions'),
                        'permissions' => ['* ']
                    ],
                    'speakers' => [
                        'label'       => 'Speakers',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('teamswag/appsforx/speakers'),
                        'permissions' => ['* ']
                    ],
                    'locations' => [
                        'label'       => 'Locations',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('teamswag/appsforx/locations'),
                        'permissions' => ['* ']
                    ]
                ]
            ]
        ];
    }
}
