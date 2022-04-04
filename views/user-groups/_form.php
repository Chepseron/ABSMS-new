<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserGroups */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-groups-form"   style="border: 2px solid green; padding: 15px; width: 50%">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'groupName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'head')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'updatedBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deleted')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roleIDs')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
