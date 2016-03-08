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
            'teamswag.appsforx.access_speakers' => ['tab' => 'Speaker', 'label' => 'teamswag.appsforx::lang.event.access_speakers'],
            'teamswag.appsforx.access_showcases' => ['tab' => 'Showcase', 'label' => 'teamswag.appsforx::lang.event.access_showcases']
        ];
    }

    public function registerComponents()
    {
        return [
            'Teamswag\Appsforx\Components\Showcases'=> 'showcases',
            'Teamswag\Appsforx\Components\Events'   => 'events',
            'Teamswag\Appsforx\Components\Speakers' => 'speakers',
            'Teamswag\Appsforx\Components\Sessions' => 'sessions',
            'Teamswag\Appsforx\Components\Ssession' => 'ssession',
            'Teamswag\Appsforx\Components\Sevent'   => 'sevent'
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
                'url'         => Backend::url('teamswag/appsforx/showcases'),
                'icon'        => 'icon-rocket',
                'permissions' => ['teamswag.appsforx.*'],
                'order'       => 500,
                'sideMenu' => [
                    'events' => [
                        'label'       => 'Events',
                        'icon'        => 'icon-calendar',
                        'url'         => Backend::url('teamswag/appsforx/events'),
                        'permissions' => ['* ']
                    ],
                    'locations' => [
                        'label'       => 'Locations',
                        'icon'        => 'icon-crosshairs',
                        'url'         => Backend::url('teamswag/appsforx/locations'),
                        'permissions' => ['* ']
                    ],
                    'sessions' => [
                        'label'       => 'Sessions',
                        'icon'        => 'icon-comments-o',
                        'url'         => Backend::url('teamswag/appsforx/sessions'),
                        'permissions' => ['* ']
                    ],
                    'speakers' => [
                        'label'       => 'Speakers',
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('teamswag/appsforx/speakers'),
                        'permissions' => ['* ']
                    ],
                    'showcases' => [
                        'label'       => 'Showcases',
                        'icon'        => 'icon-file-code-o',
                        'url'         => Backend::url('teamswag/appsforx/showcases'),
                        'permissions' => ['* ']
                    ]
                ]
            ]
        ];
    }
}