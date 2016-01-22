<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;
use Teamswag\Appsforx\Models\Session;

class Event extends ComponentBase
{
    public $session;

    public function componentDetails()
    {
        return [
            'name'        => 'Session Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
        ];
    }


    public function onRun()
    {
        $slug = $this->param('slug');
        $this->session = Session::where('slug', $slug)->first()->load('speakers');
        $this->session['start'] = gmdate("H\hi", strtotime($this->session['start_time']));
        $this->session['end'] = gmdate("H\hi", strtotime($this->session['start_time']) + ($this->session['duration'] * 60));
    }
}