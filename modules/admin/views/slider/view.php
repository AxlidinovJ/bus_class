<?php

use yii\helpers\Html;
use yii\helpers\url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Slider */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="slider-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            // 'data' => [
                // 'confirm' => 'Are you sure you want to delete this item?',
                // 'method' => 'post',
            // ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'year',
            'title',
            'subtitle:ntext',
            'button_name',
            'button_link',
            // 'bg',
            [
                'attribute'=>'bg',
                'format'=>'html',
                'value'=>function($data){
                    return html::img(url::to('@web/imgs/'.$data->bg),['width'=>'200px']);
                }
            ],
        ],
    ]) ?>

</div>
