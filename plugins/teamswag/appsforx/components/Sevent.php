<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;
use Teamswag\Appsforx\Models\Event;

class Sevent extends ComponentBase
{
    public $sevent;

    public function componentDetails()
    {
        return [
            'name'        => 'Single event Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onRun()
    {
        $slug = $this->param('slug');
        
        if($slug) {
            $this->sevent = Event::where('slug', $slug)->first()->load('Session');
        }
    }
}