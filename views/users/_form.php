<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form"  style="border: 2px solid green; padding: 15px; background: transparent">
    <?php
    $wizard_config = [
        'id' => 'stepwizard',
        'steps' => [
            1 => [
                'title' => 'User Details',
                'icon' => 'glyphicon glyphicon-cloud-download',
                'content' => $this->render('_form_1', ['model' => $model]),
                'buttons' => [
                    'next' => [
                        'title' => 'next',
                    ],
                ],
            ],
            2 => [
                'title' => 'User Details',
                'icon' => 'glyphicon glyphicon-cloud-upload',
                'content' => $this->render('_form_2', ['model' => $model]),
                'buttons' => [
                    'next' => [
                        'title' => 'next',
                    ],
                ],
            ],
        ],
        'complete_content' => "User successfully added",
        'start_step' => 1, // Optional, start with a specific step
    ];
    ?>

    <?= \drsdre\wizardwidget\WizardWidget::widget($wizard_config); ?>


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