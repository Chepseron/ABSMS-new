<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clients */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clients-form" >
    <div class="row">

        <div class="column">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'threshold')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'default_dlr_url')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'timezone')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'taxes')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'billing_type_approved_at')->textInput() ?>

            <?= $form->field($model, 'deleted_at')->textInput() ?>

            <?= $form->field($model, 'bd_manager')->textInput() ?>

            <?= $form->field($model, 'malipo_balance')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
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
