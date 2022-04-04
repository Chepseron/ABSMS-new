<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MessagetemplatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Messagetemplates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="messagetemplates-index" style="border: 2px solid green; padding: 15px">

    <p>
        <?= Html::a('Create Messagetemplates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'templateName',
            'userID',
            'messageTemplate:ntext',
            'dateCreated',
            //'dateModified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
