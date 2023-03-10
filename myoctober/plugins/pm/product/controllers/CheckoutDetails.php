<?php namespace Pm\Product\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class CheckoutDetails extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Pm.Product', 'main-menu-item', 'side-menu-item8');
    }
}
