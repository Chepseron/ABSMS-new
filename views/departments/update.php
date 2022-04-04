<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbDepartments */

$this->title = 'Update Departments: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-departments-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
