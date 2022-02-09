<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Calls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-index">

    <h1><?= Html::encode($this->title) ?></h1>

   <!--  <p>
        <?php //Html::a('Create Call', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'text:ntext',
            'address:ntext',
            'number:ntext',
            'email:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>"{view}{update}",
            ],
        ],
    ]); ?>


</div>
