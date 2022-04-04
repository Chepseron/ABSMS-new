<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Messagetemplates */

$this->title = 'Create Message templates';
$this->params['breadcrumbs'][] = ['label' => 'Message templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="messagetemplates-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
