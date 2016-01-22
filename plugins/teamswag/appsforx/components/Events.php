<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;
use Teamswag\Appsforx\Models\Event;

class Events extends ComponentBase
{
    public $events;

    public function componentDetails()
    {
        return [
            'name'        => 'Events Component',
            'description' => 'Component to create events'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function all()
    {
        return Events::all()->toArray();
    }

    public function onRun()
    {
        $this->events = $this->loadEvents();
    }

    protected function loadEvents()
    {
        $events = Event::all()->toArray();

        return $events;
    }
}
