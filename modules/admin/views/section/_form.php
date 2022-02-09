<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Section */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="section-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bg')->fileInput() ?>

    <?= $form->field($model, 'subtext')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'button_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'button_link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
