<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbModulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-modules-index"   style="border: 2px solid green; padding: 15px">


    <p>
        <?= Html::a('Create Modules', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
            'id',
            'modulename',
            'path',
            'dateCreated',
            'dateUpdated',
            //'createdBy',
            //'modifiedBy',
            //'deleted',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
