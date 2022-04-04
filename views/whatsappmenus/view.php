<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Whatsappmenus */

$this->title = $model->idwhatsappMenus;
$this->params['breadcrumbs'][] = ['label' => 'Whatsappmenuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="whatsappmenus-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idwhatsappMenus' => $model->idwhatsappMenus], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idwhatsappMenus' => $model->idwhatsappMenus], [
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
            'idwhatsappMenus',
            'clientID',
            'menuLevel',
            'menuItems',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
