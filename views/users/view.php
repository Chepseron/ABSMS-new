<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'auth_key',
            'name',
            'phone',
            'password_hash',
            'password_reset_token',
            'client_id',
            'role_id',
            'email:email',
            'email_verified_at:email',
            'phone_verified_at',
            'timezone',
            'code',
            'requires_2fa',
            'remember_token',
            'verification_token',
            'status',
            'created_at',
            'receive_summary_reports',
            'receive_monthly_reports',
            'updated_at',
            'deleted_at',
            'roleDetails',
            'departmentID',
        ],
    ]) ?>

</div>
