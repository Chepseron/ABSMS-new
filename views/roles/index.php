<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbRolesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-roles-index"   style="border: 2px solid green; padding: 15px">


    <p>
        <?= Html::a('Create Roles', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'roleName',
            'dateCreated',
            'dateUpdated',
            'updatedBy',
            //'createdBy',
            //'deleted',
            //'permissionIDs',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
