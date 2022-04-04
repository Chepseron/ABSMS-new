<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gbm */

$this->title = 'Create Google Business Messaging client';
$this->params['breadcrumbs'][] = ['label' => 'Google Business Messaging', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gbm-create">


    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
