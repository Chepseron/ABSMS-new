<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">
    <div class="row">
        <div class="column">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

            <?php
            $clients = \app\models\Clients::find()->all();
            $clientItems = ArrayHelper::map($clients, 'id', 'name');
            ?>

            <?=
            $form->field($model, 'client_id')->dropDownList(
                    $clientItems, // Flat array ('id'=>'label')
                    ['prompt' => 'Select client']    // options
            );
            ?>

            <?php $timezone = DateTimeZone::listIdentifiers(DateTimeZone::ALL) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?=
            $form->field($model, 'timezone')->dropDownList(
                    $timezone  // options
            );
            ?>

            <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'requires_2fa')->checkBox() ?>


            <?= $form->field($model, 'remember_token')->checkBox(['maxlength' => true]) ?>


            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>






<style>
    * {
        box-sizing: border-box;
    }

    /* Create three equal columns that floats next to each other */
    .column {
        width:50%;
        top: 50%;
        background: transparent;
        left: 50%;
        margin-top: -100px;
        margin-left: 200px;
    }
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
</style>

