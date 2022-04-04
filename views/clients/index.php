<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-index" style="border: 2px solid green; padding: 15px">


    <p>
        <?= Html::a('Create Clients', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',
            'email:email',
            'account_number',
            'phone_number',
            'postal_address',
            'physical_address',
            'country_id',
            'currency_id',
            'billing_type',
          //  'balance',
           // 'threshold',
            //'threshold_contacts:ntext',
            //'default_dlr_url:url',
            //'timezone',
            //'taxes:ntext',
            //'status',
            //'billing_type_approved_at',
            //'created_at',
            //'updated_at',
            //'deleted_at',
            //'bd_manager',
            //'malipo_balance',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
