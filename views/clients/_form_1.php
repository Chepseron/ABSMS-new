<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clients */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clients-form">
    <div class="row">
        <div class="column">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'account_number')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'postal_address')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'physical_address')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'country_id')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'currency_id')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'billing_type')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'balance')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'threshold_contacts')->textarea(['rows' => 6]) ?>


        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>



<style>
    * {
        box-sizing: border-box;
    }

    /* Create three equal columns that floats next to each other */
    .column {
        width:50%;
        top: 50%;
        left: 50%;
        margin-top: -100px;
        margin-left: 100px;
    }
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
</style>