<?php

use yii\helpers\Html;
use yii\helpers\url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Slider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
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
                    return html::img(url::to('@web/imgs/'.$data->bg),['width'=>'70px']);
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>"{view} {update} {delete}",
                'buttons'=>[
                    'delete'=>function($url,$model){
                        $m = "<i class='fas fa-trash'></i>";
                        return Html::a($m,['slider/delete','id'=>$model->id],['title'=>"O'chirish"]);
                    }
                ],
            ],
        ],
    ]); ?>


</div>
