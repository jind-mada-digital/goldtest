<?php namespace Goldtest\Site\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Schools Back-end Controller
 */
class Schools extends Controller
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

        BackendMenu::setContext('Goldtest.Site', 'schools', 'schools');
    }
}
