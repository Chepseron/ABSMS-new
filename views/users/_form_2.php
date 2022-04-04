<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">
    <div class="row">
        <div class="column">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>


            <?= $form->field($model, 'receive_summary_reports')->checkBox() ?>

            <?= $form->field($model, 'receive_monthly_reports')->checkBox() ?>


            <?php
            $roles = \app\models\TbRoles::find()->all();
            $items = ArrayHelper::map($roles, 'idtb_role', 'roleName');
            ?>
            <?=
            $form->field($model, 'roleDetails')->dropDownList(
                    $items, // Flat array ('id'=>'label')
                    ['prompt' => 'Select User Role']    // options
            );
            ?>
            <?php
            $city = \app\models\TbDepartments::find()->all();
            $departments = ArrayHelper::map($city, 'iddepartments', 'name');
            ?>
            <?=
            $form->field($model, 'departmentID')->dropDownList(
                    $departments, // Flat array ('id'=>'label')
                    ['prompt' => 'Select User Department']    // options
            );
            ?>


            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

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
        margin-left: 200px;
    }
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
</style>

