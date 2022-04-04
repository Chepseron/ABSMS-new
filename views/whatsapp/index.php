<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WhatsappSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Whatsapp For Business';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="whatsapp-index" style="border: 2px solid green; padding: 15px">


    <p>
        <?= Html::a('Create Whatsapp Clients', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'idwhatsapp',
            'clientID',
            'clientURL',
            'created_at',
            'updated_at',
            //'deleted',
            //'create_by',
            //'updated_by',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
