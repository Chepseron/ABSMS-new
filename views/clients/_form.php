<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ClientsSellingPriceSetup;

/* @var $this yii\web\View */
/* @var $model app\models\Clients */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="clients-form"   style="border: 2px solid green; padding: 15px;  width: 50%">
    
       <?php $form = ActiveForm::begin(); ?>
      <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'account_number')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'postal_address')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'physical_address')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'billing_type')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'balance')->textInput(['maxlength' => true]) ?>
        
            <?= $form->field($model, 'default_dlr_url')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'taxes')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
 
    <?php ActiveForm::end(); ?>
    
    
    
    
   <?php
//    $model2 = new ClientsSellingPriceSetup();
//    $wizard_config = [
//        'id' => 'stepwizard',
//        'steps' => [
//            1 => [
//                'title' => 'User Details',
//                'icon' => 'glyphicon glyphicon-cloud-download',
//                'content' => $this->render('_form_1', ['model' => $model]),
//                'buttons' => [
//                    'next' => [
//                        'title' => 'next',
//                    ],
//                ],
//            ],
//            2 => [
//                'title' => 'User Details',
//                'icon' => 'glyphicon glyphicon-cloud-upload',
//                'content' => $this->render('_form_2', ['model' => $model]),
//                'buttons' => [
//                    'next' => [
//                        'title' => 'next',
//                    ],
//                ],
//            ],
//            3 => [
//                'title' => 'User Details',
//                'icon' => 'glyphicon glyphicon-cloud-upload',
//                'content' => $this->render('/clients-selling-price-setup/_form', ['model' => $model2]),
//                'buttons' => [
//                    'next' => [
//                        'title' => 'next',
//                    ],
//                ],
//            ],
//        ],
//        'complete_content' => "client successfully created",
//        'start_step' => 1, // Optional, start with a specific step
//    ];
    
    
    
    
    ?>
    
    
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