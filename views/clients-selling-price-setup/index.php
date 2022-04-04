<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientsSellingPriceSetupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clients Selling Price Setups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-selling-price-setup-index" style="border: 2px solid green; padding: 15px">

 

    <p>
        <?= Html::a('Create Clients Selling Price Setup', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'client_id',
            'network_id',
            'route_id',
            'currency_id',
            //'selling_price',
            //'status',
            //'created_at',
            //'updated_at',
            //'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
