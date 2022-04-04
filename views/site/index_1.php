<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'name',
            'phone',
            //'password_hash',
            //'password_reset_token',
            //'client_id',
            //'role_id',
            //'email:email',
            //'email_verified_at:email',
            //'phone_verified_at',
            //'timezone',
            //'code',
            //'requires_2fa',
            //'remember_token',
            //'verification_token',
            //'status',
            //'created_at',
            //'receive_summary_reports',
            //'receive_monthly_reports',
            //'updated_at',
            //'deleted_at',
            //'roleDetails',
            //'departmentID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
