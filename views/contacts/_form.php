<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-form" style="border: 2px solid green; padding: 15px;  width: 50%">
 
        
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    
      <?php
            $clients = \app\models\ContactGroups::find()->all();
            $clientItems = ArrayHelper::map($clients, 'id', 'name');
            ?>

            <?=
            $form->field($model, 'contact_group_id')->dropDownList(
                    $clientItems, // Flat array ('id'=>'label')
                    ['prompt' => 'Select Contact Group']    // options
            );
            ?>
    

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

            <?= $form->field($model, 'field1')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'field2')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'field3')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'field4')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'field5')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>
  
   
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>




<style>
    * {
        box-sizing: border-box;
    }

    /* Create three equal columns that floats next to each other */
    .column {
        float: left;
        width: 50%;
        padding: 10px;

    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
</style>

