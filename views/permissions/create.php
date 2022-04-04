<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbPermissions */

$this->title = 'Create Permissions';
$this->params['breadcrumbs'][] = ['label' => 'Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-permissions-create">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
