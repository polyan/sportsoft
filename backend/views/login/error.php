<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Данная ошибка возникла, когда сервер обрабатывал Ваш запрос.
    </p>
    <p>
        Пожалуйста, свяжитесь с нами, если Вы думаете, что это ошибка сервера. Спасибо.
    </p>

</div>