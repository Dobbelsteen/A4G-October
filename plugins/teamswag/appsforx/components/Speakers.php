<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;
use Teamswag\Appsforx\Models\Speaker;


class Speakers extends ComponentBase
{
    public $speakers;

    public function componentDetails()
    {
        return [
            'name'        => 'Speakers Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->speakers = Speaker::orderBy('priority', 'ASC')->get();
    }
   
}