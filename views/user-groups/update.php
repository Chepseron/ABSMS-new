<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserGroups */

$this->title = 'Update User Groups: ' . $model->idtb_Usergroups;
$this->params['breadcrumbs'][] = ['label' => 'User Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtb_Usergroups, 'url' => ['view', 'idtb_Usergroups' => $model->idtb_Usergroups]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-groups-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
