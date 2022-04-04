<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserGroups */

$this->title = $model->idtb_Usergroups;
$this->params['breadcrumbs'][] = ['label' => 'User Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-groups-view">

    <p>
        <?= Html::a('Update', ['update', 'idtb_Usergroups' => $model->idtb_Usergroups], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idtb_Usergroups' => $model->idtb_Usergroups], [
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
            'idtb_Usergroups',
            'groupName',
            'department',
            'head',
            'dateCreated',
            'dateUpdated',
            'updatedBy',
            'createdBy',
            'deleted',
            'roleIDs',
        ],
    ]) ?>

</div>
