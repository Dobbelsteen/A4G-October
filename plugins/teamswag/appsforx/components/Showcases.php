<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;
use Teamswag\Appsforx\Models\Showcase;


class Showcases extends ComponentBase
{
    public $showcases;
    
    public function componentDetails()
    {
        return [
            'name'        => 'Showcase Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $showcasesPerPage = $this->property('showcasesPerPage');
        
        if(isset($showcasesPerPage)) {
            $this->showcases = Showcase::orderBy('id', 'DESC')->take($showcasesPerPage)->get();
        } else {          
            $this->showcases = Showcase::orderBy('id', 'DESC')->get();
        }
    }
}