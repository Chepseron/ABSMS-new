<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Messagetemplates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="messagetemplates-form"  style="border: 2px solid green; padding: 15px;  width: 50%">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'templateName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userID')->textInput() ?>

    <?= $form->field($model, 'messageTemplate')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
