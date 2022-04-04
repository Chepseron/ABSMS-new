<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OutboundSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Outbounds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outbound-index" style="border: 2px solid green; padding: 15px">

 

    <p>
        <?= Html::a('Create Message', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sender',
            'recipient',
            'client_id',
            'user_id',
            //'buying_price',
            //'selling_price',
            //'currency_code',
            //'route_used',
            //'network',
            //'message:ntext',
            //'scheduled_id',
            //'dlr_url:url',
            //'country',
            //'priority',
            //'route_quality',
            //'type',
            //'status',
            //'first_send',
            //'next_send',
            //'last_send',
            //'expiry_date',
            //'deliver_time',
            //'resend',
            //'max_sends',
            //'correlator',
            //'sdp_service_id',
            //'resend_frequency',
            //'number_of_sends',
            //'description',
            //'message_id',
            //'schedule_id',
            //'created_at',
            //'sent_at',
            //'updated_at',
            //'delivered_at',
            //'message_type',
            //'message_hash',
            //'statusDescription:ntext',
            //'encrypted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
