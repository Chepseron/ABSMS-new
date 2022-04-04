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
        top: 100%;
        left: 50%;
        margin-top: 100px;
        margin-left: 200px;
    }
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
</style>

