<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Section */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="section-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
       
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            // 'bg',
            [
                'attribute'=>'bg',
                'format'=>'html',
                'value'=>function($data){
                    return html::img(url::to('@web/imgs/'.$data->bg),['width'=>'300px']);
                }
            ],
            'subtext',
            'text',
            'button_name',
            'button_link',
        ],
    ]) ?>

</div>
