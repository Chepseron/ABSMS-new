<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Outbound */

$this->title = 'Create Message';
$this->params['breadcrumbs'][] = ['label' => 'Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outbound-create" style="border: 2px solid green; padding: 15px">

  
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
