<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Whatsapp */

$this->title = 'Update Whatsapp: ' . $model->idwhatsapp;
$this->params['breadcrumbs'][] = ['label' => 'Whatsapps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idwhatsapp, 'url' => ['view', 'idwhatsapp' => $model->idwhatsapp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="whatsapp-update">


    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
