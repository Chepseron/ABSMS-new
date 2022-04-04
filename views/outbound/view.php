<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Outbound */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Outbounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="outbound-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'sender',
            'recipient',
            'client_id',
            'user_id',
            'buying_price',
            'selling_price',
            'currency_code',
            'route_used',
            'network',
            'message:ntext',
            'scheduled_id',
            'dlr_url:url',
            'country',
            'priority',
            'route_quality',
            'type',
            'status',
            'first_send',
            'next_send',
            'last_send',
            'expiry_date',
            'deliver_time',
            'resend',
            'max_sends',
            'correlator',
            'sdp_service_id',
            'resend_frequency',
            'number_of_sends',
            'description',
            'message_id',
            'schedule_id',
            'created_at',
            'sent_at',
            'updated_at',
            'delivered_at',
            'message_type',
            'message_hash',
            'statusDescription:ntext',
            'encrypted',
        ],
    ]) ?>

</div>
