<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaymentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payments-index"   style="border: 2px solid green; padding: 15px">



    <p>
        <?= Html::a('Create Payments', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           // 'id',
            'client_id',
            'payment_method',
            'account_number',
            'reference_number',
            //'pf',
            //'currency_id',
            'topup_amount',
            //'tax',
            //'status',
            //'narration',
            //'lpo_status',
            //'created_by',
            //'transaction_time',
            //'created_at',
            //'updated_at',
            //'deleted_at',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
