<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\ClientsSellingPriceSetup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clients-selling-price-setup-form"  style="border: 2px solid green; padding: 15px;  width: 50%">

    <?php $form = ActiveForm::begin(); ?>

   
    
    
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

  
    
       <?php
            $network = \app\models\Networks::find()->all();
            $clientItems = ArrayHelper::map($network, 'id', 'name');
            ?>

            <?=
            $form->field($model, 'network_id')->dropDownList(
                    $clientItems, // Flat array ('id'=>'label')
                    ['prompt' => 'Select Network']    // options
            );
            ?>

    <?= $form->field($model, 'route_id')->textInput(['maxlength' => true]) ?>

      <?php
            $currency = \app\models\Currencies::find()->all();
            $clientItems = ArrayHelper::map($currency, 'id', 'currencyname');
            ?>

            <?=
            $form->field($model, 'currency_id')->dropDownList(
                    $clientItems, // Flat array ('id'=>'label')
                    ['prompt' => 'Select Currency']    // options
            );
            ?>
    
    

    <?= $form->field($model, 'selling_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>
 
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
