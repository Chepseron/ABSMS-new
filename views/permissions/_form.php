<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveField;

/* @var $this yii\web\View */
/* @var $model app\models\TbPermissions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-permissions-form"   style="border: 2px solid green; padding: 15px">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'permissionName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updatedBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'moduleIDs')->textInput(['maxlength' => true]) ?>



    <?php
    $roles = \app\models\TbModules::find()->all();
    $items = ArrayHelper::map($roles, 'id', 'modulename');
    ?>
    <?=
    $form->field($model, 'moduleIDs')->checkboxList(
            $items, [
        'itemOptions' => [
            'labelOptions' => ['class' => 'col-md-4']
        ]
            ]
    );
    ?>




    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
