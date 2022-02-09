<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Price', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'title',
            'price',
            'month',
            'price_item:ntext',
            // 'button_name',
            // 'button_link',
            // 'status',
            [
                'attribute'=>'status',
                'value'=>function($data){
                    return $data->status?"Aktiv":"Aktiv emas";
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>"{view} {update} {delete}",
                'buttons'=>[
                    'delete'=>function($url,$model){
                        $m = "<i class='fas fa-trash'></i>";
                        return Html::a($m,['price/delete','id'=>$model->id],['title'=>"O'chirish"]);
                    }
                ],
            ],
        ],
    ]); ?>


</div>
