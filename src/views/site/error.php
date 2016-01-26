<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
$code = substr($name, strpos($name, '#') + 1, 3);
$textColorClass = $code < 500 ? 'text-yellow' : 'text-red';
$alertColorClass = $code < 500 ? 'alert-warning' : 'alert-danger';
?>

<div class="error-page">
    <h2 class="headline <?= $textColorClass ?>"> 404</h2>
    <div class="error-content">
        <h3><i class="fa fa-warning <?= $textColorClass ?>"></i> <?= Html::encode($this->title) ?></h3>
        <div class="alert <?= $alertColorClass ?>">
            <?= nl2br(Html::encode($message)) ?>
        </div>
        <p>
            <?= Yii::t('app', 'The above error occurred while the Web server was processing your request.'); ?><br>
            <?= Yii::t('app', 'Please contact us if you think this is a server error. Thank you.'); ?>
        </p>
    </div>
    <!-- /.error-content -->
</div>