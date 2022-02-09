<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Services', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'img',
            [
                'attribute'=>'img',
                'format'=>'html',
                'value'=>function($data){
                    return "<i class='".$data->img."'></i>";
                }
            ],
            'title',
            'subtitle',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>"{view} {update} {delete}",
                'buttons'=>[
                    'delete'=>function($url,$model){
                        $m = "<i class='fas fa-trash'></i>";
                        return Html::a($m,['services/delete','id'=>$model->id],['title'=>"O'chirish"]);
                    }
                ],
            ],
        ],
    ]); ?>


</div>
