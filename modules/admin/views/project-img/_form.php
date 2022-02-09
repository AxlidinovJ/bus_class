<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\ProjectCategory;

$category = ArrayHelper::map(ProjectCategory::find()->all(),'id','name');
?>

<div class="project-img-form">
    <?=print_r($model->img)?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'catagory_id')->dropdownList($category,['prompt'=>"Categoriyani tanlang"]) ?>

    <?= $form->field($model, 'img')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
