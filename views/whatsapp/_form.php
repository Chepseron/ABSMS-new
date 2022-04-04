<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Whatsapp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="whatsapp-form"  style="border: 2px solid green; padding: 15px;  width: 50%">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clientID')->textInput() ?>

    <?= $form->field($model, 'clientURL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
