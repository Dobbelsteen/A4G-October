<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;
use Teamswag\Appsforx\Models\Session;
use Teamswag\Appsforx\Models\Location;

class Sessions extends ComponentBase
{
    public $sessions;
    public $locations;

    public function componentDetails()
    {
        return [
            'name'        => 'sessions Component',
            'description' => 'Component that lets you make sessions'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->sessions = Session::all()->load('Location')->toArray();
        $this->locations = Location::orderBy('name')->get();

        foreach($this->sessions as &$session) {
 
            $session['end_time'] = gmdate("F d, Y H:i:s", strtotime($session['start_time']) + ($session['duration'] * 60));
            $session['start_time'] = gmdate("F d, Y H:i:s", strtotime($session['start_time']));
            
            // Check which locationName the session belongs to
            for($i = 0; $i < count($this->locations); $i++) {
                if($this->locations[$i]['id'] == $session['location_id']) {
                    $session['loc'] = $this->locations[$i]['name'];
                    break;
                }
            }
        }
    }
}
