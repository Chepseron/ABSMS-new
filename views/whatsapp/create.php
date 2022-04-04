<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Whatsapp */

$this->title = 'Create Whatsapp';
$this->params['breadcrumbs'][] = ['label' => 'Whatsapps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="whatsapp-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
