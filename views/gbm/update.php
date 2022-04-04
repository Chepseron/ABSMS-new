<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gbm */

$this->title = 'Update Gbm: ' . $model->idgbm;
$this->params['breadcrumbs'][] = ['label' => 'Gbms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idgbm, 'url' => ['view', 'idgbm' => $model->idgbm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gbm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
