<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbRoles */

$this->title = 'Create Roles';
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-roles-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
