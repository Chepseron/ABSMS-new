<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbRoles */

$this->title = 'Update Tb Roles: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-roles-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
