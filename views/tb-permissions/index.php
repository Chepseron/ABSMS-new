<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbPermissionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Permissions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-permissions-index">


    <p>
        <?= Html::a('Create Permissions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'permissionName',
            'dateCreated',
            'dateUpdated',
            'createdBy',
            //'updatedBy',
            //'deleted',
            //'moduleIDs',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
