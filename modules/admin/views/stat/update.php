<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Stat */

$this->title = 'Update Stat: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Stats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
