<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model krok\config\models\Config */

$this->title = Yii::t(
    'yii',
    'Create {modelClass}',
    [
        'modelClass' => Yii::t('config', 'Config'),
    ]
);
$this->params['breadcrumbs'][] = ['label' => Yii::t('config', 'Config'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render(
        '_form',
        [
            'model' => $model,
        ]
    ) ?>

</div>
