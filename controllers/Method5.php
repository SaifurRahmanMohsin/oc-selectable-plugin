<?php namespace Mohsin\Selectable\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Method5 Back-end Controller
 */
class Method5 extends Controller
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

        BackendMenu::setContext('Mohsin.Selectable', 'selectable', 'method5');
    }
}
