<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clients */

$this->title = 'Create Clients';
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];

?>
<div class="clients-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
