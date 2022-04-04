<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CurrencyRatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Currency Rates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="currency-rates-index" style="border: 2px solid green; padding: 15px">

 

    <p>
        <?= Html::a('Create Currency Rates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'from_currency_id',
            'to_currency_id',
            'rate',
            'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
