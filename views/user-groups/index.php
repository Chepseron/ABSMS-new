<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserGroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-groups-index" style="border: 2px solid green; padding: 15px">

    

    <p>
        <?= Html::a('Create User Groups', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],

            'idtb_Usergroups',
            'groupName',
            'department',
            'head',
            'dateCreated',
            //'dateUpdated',
            //'updatedBy',
            //'createdBy',
            //'deleted',
            //'roleIDs',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
