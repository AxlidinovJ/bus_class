<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Imgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-img-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project Img', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'catagory_id',
            [
                'attribute'=>'catagory_id',
                'value'=>function($data){
                    return $data->category->name;
                }
            ],
            // 'img',
            [
                'attribute'=>'img',
                'format'=>'html',
                'value'=>function($data){
                    return html::img(url::to('@web/imgs/'.$data->img),['width'=>'100px']);
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>"{view} {update} {delete}",
                'buttons'=>[
                    'delete'=>function($url,$model){
                        $m = "<i class='fas fa-trash'></i>";
                        return Html::a($m,['project-img/delete','id'=>$model->id],['title'=>"O'chirish"]);
                    }
                ],
            ],
            
        ],
    ]); ?>


</div>
