<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GbmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Google Business Messaging';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gbm-index"  style="border: 2px solid green; padding: 15px">
    <p>
        <?= Html::a('Create Google Business Messaging Clients', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'idgbm',
            'clientID',
            'clientURL',
            'created_at',
            'updated_at',
            //'createdBy',
            //'updatedBy',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
