<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClientsSellingPriceSetup */

$this->title = 'Create Clients Selling Price Setup';
$this->params['breadcrumbs'][] = ['label' => 'Clients Selling Price Setups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-selling-price-setup-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
