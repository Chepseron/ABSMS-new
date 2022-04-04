<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbDepartments */

$this->title = 'Create Departments';
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-departments-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
