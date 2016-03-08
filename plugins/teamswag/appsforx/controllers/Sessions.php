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
    
    public function create()
    {
        BackendMenu::setContextSideMenu('new_session');

        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/teamswag/appsforx/assets/css/rainlab.blog-preview.css');
        $this->addJs('/plugins/teamswag/appsforx/assets/js/post-form.js');   

        return $this->asExtension('FormController')->create();
    }
    
    public function update($recordId = null)
    {
        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/teamswag/appsforx/assets/css/rainlab.blog-preview.css');
        $this->addJs('/plugins/teamswag/appsforx/assets/js/post-form.js');  

        return $this->asExtension('FormController')->update($recordId);
    }
}
