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
            'teamswag.appsforx.access_showcases' => ['tab' => 'Showcase', 'label' => 'teamswag.appsforx::lang.event.access_showcases']
        ];
    }

    public function registerComponents()
    {
        return [
            'Teamswag\Appsforx\Components\Showcases' => 'showcases'
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
                        'label'       => 'Showcases',
                        'icon'        => 'icon-file-code-o',
                        'url'         => Backend::url('teamswag/appsforx/showcases'),
                        'permissions' => ['* ']
                    ],
                    'locations' => [
                        'label'       => 'Locations',
                        'icon'        => 'icon-crosshairs',
                        'url'         => Backend::url('teamswag/appsforx/locations'),
                        'permissions' => ['* ']
                    ]
                ]
            ]
        ];
    }
}
