<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserGroupsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-groups-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idtb_Usergroups') ?>

    <?= $form->field($model, 'groupName') ?>

    <?= $form->field($model, 'department') ?>

    <?= $form->field($model, 'head') ?>

    <?= $form->field($model, 'dateCreated') ?>

    <?php // echo $form->field($model, 'dateUpdated') ?>

    <?php // echo $form->field($model, 'updatedBy') ?>

    <?php // echo $form->field($model, 'createdBy') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'roleIDs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
