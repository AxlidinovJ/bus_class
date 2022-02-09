<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',

           [
                'class' => 'yii\grid\ActionColumn',
                'template'=>"{view} {update} {delete}",
                'buttons'=>[
                    'delete'=>function($url,$model){
                        $m = "<i class='fas fa-trash'></i>";
                        return Html::a($m,['project-category/delete','id'=>$model->id],['title'=>"O'chirish"]);
                    }
                ],
            ],
        ],
    ]); ?>


</div>
