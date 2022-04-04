<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\CurrencyRates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="currency-rates-form"  style="border: 2px solid green; padding: 15px;  width: 50%">

    <?php $form = ActiveForm::begin(); ?>
    
    
         <?php
            $currency = \app\models\Currencies::find()->all();
            $clientItems = ArrayHelper::map($currency, 'id', 'currencyname');
            ?>

            <?=
            $form->field($model, 'from_currency_id')->dropDownList(
                    $clientItems, // Flat array ('id'=>'label')
                    ['prompt' => 'Select Currency']    // options
            );
            ?>

    
    
    
            <?=
            $form->field($model, 'to_currency_id')->dropDownList(
                    $clientItems, // Flat array ('id'=>'label')
                    ['prompt' => 'Select Currency']    // options
            );
            ?>
  

    <?= $form->field($model, 'rate')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
