<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Meet */

$this->title = 'Create Meet';
$this->params['breadcrumbs'][] = ['label' => 'Meets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
