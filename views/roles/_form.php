<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TbRoles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-roles-form"   style="border: 2px solid green; padding: 15px">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'roleName')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'updatedBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deleted')->textInput() ?>



    <?php
    $perms = \app\models\TbPermissions::find()->all();
    $items = ArrayHelper::map($perms, 'id', 'permissionName');
    ?>
    <?=
    $form->field($model, 'permissionIDs')->checkboxList(
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
