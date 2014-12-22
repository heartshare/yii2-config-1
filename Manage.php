<?php

namespace app\modules\config;

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
    public $controllerNamespace = 'app\modules\config\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
