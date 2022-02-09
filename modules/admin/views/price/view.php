<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Price */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="price-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            // 'data' => [
            //     'confirm' => 'Are you sure you want to delete this item?',
            //     'method' => 'post',
            // ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'price',
            'month',
            'price_item:ntext',
             // 'status',
            [
                'attribute'=>'status',
                'value'=>function($data){
                    return $data->status?"Aktiv":"Aktiv emas";
                }
            ],
            'button_name',
            'button_link',
        ],
    ]) ?>

</div>
