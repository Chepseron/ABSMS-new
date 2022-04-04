<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Outbound */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="outbound-form" style="border: 2px solid green; padding: 15px;  width: 50%">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'sender')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'recipient')->textInput(['maxlength' => true]) ?>

            <?php
            $clients = \app\models\Clients::find()->all();
            $clientItems = ArrayHelper::map($clients, 'id', 'name');
            ?>

            <?=
            $form->field($model, 'client_id')->dropDownList(
                    $clientItems, // Flat array ('id'=>'label')
                    ['prompt' => 'Select client']    // options
            );
            ?>


            <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'message')->textarea(['rows' => 6, 'keyup' => 'countChars(this)']) ?>

            <p id="charNum">0 characters</p>



    <div class="form-group">
<?= Html::submitButton('Send message', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>


<script>


    $('#Whatsapp_message').keyup(function() {
        characterlimit();
    });


    function countChars() {
        var maxLength = 141;
        var strLength = $('#Whatsapp_message').val.length;
        var charRemain = (maxLength - strLength);

        if (charRemain < 0) {
            document.getElementById("charNum").innerHTML = '<span style="color: red;">You have exceeded the limit of ' + maxLength + ' characters</span>';
        } else {
            document.getElementById("charNum").innerHTML = charRemain + ' characters remaining';
        }
    }
</script>
