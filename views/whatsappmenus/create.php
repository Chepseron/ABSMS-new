<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Whatsappmenus */

$this->title = 'Create Whatsappmenus';
$this->params['breadcrumbs'][] = ['label' => 'Whatsappmenuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="whatsappmenus-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
