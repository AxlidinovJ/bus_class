<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sections';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Section', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'bg',
            [
                'attribute'=>'bg',
                'format'=>'html',
                'value'=>function($data){
                    return html::img(url::to('@web/imgs/'.$data->bg),['width'=>'200px']);
                }
            ],
            'subtext',
            'text',
            'button_name',
            //'button_link',

           [
                'class' => 'yii\grid\ActionColumn',
                'template'=>"{view} {update}",
                // 'buttons'=>[
                //     'delete'=>function($url,$model){
                //         $m = "<i class='fas fa-trash'></i>";
                //         return Html::a($m,['slider/delete','id'=>$model->id],['title'=>"O'chirish"]);
                //     }
                // ],
            ],
        ],
    ]); ?>


</div>
