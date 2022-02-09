<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php //Html::a('Create Stat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'completed',
            'hours',
            'feedbacks',
            'clients',
            'title',
            'sub_title:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=> "{view} {update}",

            ],
        ],
    ]); ?>


</div>
