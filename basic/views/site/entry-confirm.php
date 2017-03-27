<?php
use yii\helpers\Html;
?>
<p>请您输入以下信息:</p>

<ul>
    <li><label>姓名：</label>: <?= Html::encode($model->name) ?></li>
    <li><label>邮箱：</label>: <?= Html::encode($model->email) ?></li>
</ul>