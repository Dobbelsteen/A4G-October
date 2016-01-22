<?php namespace Teamswag\Appsforx\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * sessions Back-end Controller
 */
class Sessions extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Teamswag.Appsforx', 'appsforx', 'sessions');
    }
}
