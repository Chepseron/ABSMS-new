<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Whatsappmenus */

$this->title = 'Update Whatsappmenus: ' . $model->idwhatsappMenus;
$this->params['breadcrumbs'][] = ['label' => 'Whatsappmenuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idwhatsappMenus, 'url' => ['view', 'idwhatsappMenus' => $model->idwhatsappMenus]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="whatsappmenus-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
