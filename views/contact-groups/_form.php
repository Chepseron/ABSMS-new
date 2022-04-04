<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\ContactGroups */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clients-selling-price-setup-form"  style="border: 2px solid green; padding: 15px;  width: 50%">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    
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

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
