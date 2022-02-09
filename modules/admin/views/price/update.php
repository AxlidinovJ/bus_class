<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Price */

$this->title = 'Update Price: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="price-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
