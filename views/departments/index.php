<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbDepartmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-departments-index"   style="border: 2px solid green; padding: 15px">

    <p>
        <?= Html::a('Create Departments', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'hod',
            'description',
            'createdBy',
            //'dateCreated',
            //'updatedBy',
            //'dateUpdated',
            //'deletedAt',
            //'status',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
