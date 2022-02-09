<?php

use yii\helpers\Html;
use yii\helpers\url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Meets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Meet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'company',
            // 'img',
             [
                'attribute'=>'img',
                'format'=>'html',
                'value'=>function($data){
                    return html::img(url::to('@web/imgs/'.$data->img),['width'=>'70px']);
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>"{view} {update} {delete}",
                'buttons'=>[
                    'delete' => function($url,$model){
                        $m = "<i class='fas fa-trash'></i>";
                        return Html::a($m,['meet/delete','id'=>$model->id],[
                            'title'=>"O'chirish",
                            'data'=>[
                                'method' => 'POST',
                                'confirm' => 'Test'
                            ]
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>


</div>
