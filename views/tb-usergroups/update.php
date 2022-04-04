<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbUsergroups */

$this->title = 'Update Usergroups: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usergroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-usergroups-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
