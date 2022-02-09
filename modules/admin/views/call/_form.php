<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Call */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="call-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'number')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
