<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-index"  style="border: 2px solid green; padding: 15px">

    <p>
        <?= Html::a('Create Contacts', ['create'], ['class' => 'btn btn-success']) ?>
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
            'contact_group_id',
            'client_id',
            'field1',
            //'field2',
            //'field3',
            //'field4',
            //'field5',
            //'phone_number',
            //'field_1',
            //'field_2',
            //'field_3',
            //'field_4',
            //'field_5',
            //'status',
            //'created_at',
            //'updated_at',
            //'deleted_at',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
