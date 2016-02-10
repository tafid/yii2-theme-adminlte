<?php

use yii\helpers\Html;

?>
<ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
        <?= $this->render('//layouts/gravatar', ['size' => 90]); ?>
        <p>
            <?= Yii::$app->user->identity->username; ?>

            <?php if (Yii::$app->user->can('support') && Yii::$app->user->identity->seller !== null) {
                print ' / ' . Yii::$app->user->identity->seller;
            } ?>

            <?php if (Yii::$app->user->can('support')) : ?>
                <small><?= Yii::$app->user->identity->type; ?></small>
            <?php endif; ?>

        </p>
    </li>
    <!-- Menu Body -->
    <li class="user-body">
        <div class="col-xs-6 text-center">
            <?= Html::a(Yii::t('app', 'Recharge Account'), ['@pay/deposit']); ?>
        </div>
        <div class="col-xs-6 text-center">
            <?= Html::a(Yii::t('app', 'Create Ticket'), ['@ticket/create']); ?>
        </div>
    </li>
    <!-- Menu Footer-->
    <li class="user-footer">
        <div class="pull-left">
            <?= Html::a(Yii::t('app', 'Profile'), ['/site/profile'], ['class' => 'btn btn-default btn-flat']); ?>
        </div>
        <div class="pull-right">
            <?= Html::a(Yii::t('app', 'Sign out'), ['/site/logout'], ['class' => 'btn btn-default btn-flat']); ?>
        </div>
    </li>
</ul>
