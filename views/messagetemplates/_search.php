<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MessagetemplatesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="messagetemplates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'templateName') ?>

    <?= $form->field($model, 'userID') ?>

    <?= $form->field($model, 'messageTemplate') ?>

    <?= $form->field($model, 'dateCreated') ?>

    <?php // echo $form->field($model, 'dateModified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
