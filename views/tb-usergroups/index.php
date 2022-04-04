<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbUsergroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-usergroups-index"   style="border: 2px solid green; padding: 15px">

    <p>
        <?= Html::a('Create User groups', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
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
    ]);
    ?>


</div>
