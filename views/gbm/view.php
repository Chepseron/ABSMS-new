<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Gbm */

$this->title = $model->idgbm;
$this->params['breadcrumbs'][] = ['label' => 'Gbms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gbm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idgbm' => $model->idgbm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idgbm' => $model->idgbm], [
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
            'idgbm',
            'clientID',
            'clientURL',
            'created_at',
            'updated_at',
            'createdBy',
            'updatedBy',
        ],
    ]) ?>

</div>
