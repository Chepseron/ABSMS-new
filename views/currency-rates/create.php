<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CurrencyRates */

$this->title = 'Create Currency Rates';
$this->params['breadcrumbs'][] = ['label' => 'Currency Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="currency-rates-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
