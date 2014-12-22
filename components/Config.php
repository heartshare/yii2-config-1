<?php

namespace app\modules\config\components;

use Yii;
use yii\helpers\ArrayHelper;
use app\modules\config\models\Config as Model;

class Config
{
    /**
     * @var array
     */
    private $config = [];

    public function __construct()
    {
        $this->config = ArrayHelper::map(Model::find()->all(), 'name', 'value');
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        return ArrayHelper::getValue($this->config, $name);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function has($name)
    {
        return ArrayHelper::keyExists($name, $this->config);
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function get($name)
    {
        return $this->{$name};
    }
}
