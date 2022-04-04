<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WhatsappmenusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Whatsapp menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="whatsappmenus-index"  style="border: 2px solid green; padding: 15px">


    <p>
        <?= Html::a('Create Whatsapp menus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'idwhatsappMenus',
            'clientID',
            'menuLevel',
            'menuItems',
            'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
