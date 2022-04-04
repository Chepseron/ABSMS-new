<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TbUsergroups */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-usergroups-form"   style="border: 2px solid green; padding: 15px">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'groupName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'head')->textInput() ?>


    <?= $form->field($model, 'updatedBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdBy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?php
    $roples = \app\models\TbRoles::find()->all();
    $items = ArrayHelper::map($roples, 'id', 'roleName');
    ?>
    <?=
    $form->field($model, 'roleIDs')->checkboxList(
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
