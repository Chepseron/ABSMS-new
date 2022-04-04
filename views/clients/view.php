<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clients */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clients-view">

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
            'name',
            'email:email',
            'account_number',
            'phone_number',
            'postal_address',
            'physical_address',
            'country_id',
            'currency_id',
            'billing_type',
            'balance',
            'threshold',
            'threshold_contacts:ntext',
            'default_dlr_url:url',
            'timezone',
            'taxes:ntext',
            'status',
            'billing_type_approved_at',
            'created_at',
            'updated_at',
            'deleted_at',
            'bd_manager',
            'malipo_balance',
        ],
    ]) ?>

</div>
