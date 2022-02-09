<?php 
use yii\helpers\url;
?>
<div class="admin-default-index">
    <a class="btn btn-outline-success" href="<?=url::to(['slider/index'])?>">Slider</a>
    <a class="btn btn-outline-success" href="<?=url::to(['services/index']);?>">Services</a>
    <a class="btn btn-outline-success" href="<?=url::to(['meet/index']);?>">Meet</a>
    <a class="btn btn-outline-success" href="<?=url::to(['news/index']);?>">News</a>
</div>
