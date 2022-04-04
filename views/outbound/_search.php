<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OutboundSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="outbound-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sender') ?>

    <?= $form->field($model, 'recipient') ?>

    <?= $form->field($model, 'client_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'buying_price') ?>

    <?php // echo $form->field($model, 'selling_price') ?>

    <?php // echo $form->field($model, 'currency_code') ?>

    <?php // echo $form->field($model, 'route_used') ?>

    <?php // echo $form->field($model, 'network') ?>

    <?php // echo $form->field($model, 'message') ?>

    <?php // echo $form->field($model, 'scheduled_id') ?>

    <?php // echo $form->field($model, 'dlr_url') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'priority') ?>

    <?php // echo $form->field($model, 'route_quality') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'first_send') ?>

    <?php // echo $form->field($model, 'next_send') ?>

    <?php // echo $form->field($model, 'last_send') ?>

    <?php // echo $form->field($model, 'expiry_date') ?>

    <?php // echo $form->field($model, 'deliver_time') ?>

    <?php // echo $form->field($model, 'resend') ?>

    <?php // echo $form->field($model, 'max_sends') ?>

    <?php // echo $form->field($model, 'correlator') ?>

    <?php // echo $form->field($model, 'sdp_service_id') ?>

    <?php // echo $form->field($model, 'resend_frequency') ?>

    <?php // echo $form->field($model, 'number_of_sends') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'message_id') ?>

    <?php // echo $form->field($model, 'schedule_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'sent_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'delivered_at') ?>

    <?php // echo $form->field($model, 'message_type') ?>

    <?php // echo $form->field($model, 'message_hash') ?>

    <?php // echo $form->field($model, 'statusDescription') ?>

    <?php // echo $form->field($model, 'encrypted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
