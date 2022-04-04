<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Whatsapp */

$this->title = $model->idwhatsapp;
$this->params['breadcrumbs'][] = ['label' => 'Whatsapps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="whatsapp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idwhatsapp' => $model->idwhatsapp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idwhatsapp' => $model->idwhatsapp], [
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
            'idwhatsapp',
            'clientID',
            'clientURL',
            'created_at',
            'updated_at',
            'deleted',
            'create_by',
            'updated_by',
        ],
    ]) ?>

</div>
