<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbUsergroups */

$this->title = 'Create Usergroups';
$this->params['breadcrumbs'][] = ['label' => 'Usergroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-usergroups-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
