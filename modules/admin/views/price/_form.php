<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Price */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="price-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'month')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_item')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'button_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'button_link')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'status')->dropdownList(['0'=>"Aktiv emas",'1'=>"Aktiv"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
