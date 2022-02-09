<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Stat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'completed')->textInput() ?>

    <?= $form->field($model, 'hours')->textInput() ?>

    <?= $form->field($model, 'feedbacks')->textInput() ?>

    <?= $form->field($model, 'clients')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_title')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
