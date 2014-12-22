<?php

namespace krok\config;

use krok\cp\components\Module;

class Manage extends Module
{
    /**
     * @var string
     */
    public $defaultRoute = 'manage';

    /**
     * @var string
     */
    public $controllerNamespace = 'krok\config\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
