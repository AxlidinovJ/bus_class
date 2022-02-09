<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'img')->dropdownList([
                'fas fa-laptop'=>"Kampyuter",
                'fas fa-chart-bar'=>"ChartBar",
                'fas fa-edit'=>"Qalam",
                'fas fa-book-reader'=>"Kitob",
                'fas fa-chalkboard-teacher'=>"O'qituvchi",
            ]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
