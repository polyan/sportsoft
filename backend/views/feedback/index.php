<?php

use backend\assets\FeedbackAsset;
use common\models\feedback\FeedbackSearch;
use yii\data\ActiveDataProvider;
use yii\bootstrap\Html;
use yii\web\View;


/* @var $this View */
/* @var $searchModel FeedbackSearch */
/* @var $dataProvider ActiveDataProvider */
$this->title = 'Список отправленных форм';
$this->params['breadcrumbs'][] = $this->title;
FeedbackAsset::register($this);
?>
<?= Html::a(
    'Список отправленных форм активных на данный момент пользователей',
    ['', 'activeUsers' => true],
    ['class' => 'btn btn-primary']
) ?>

<div class="feedback-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_send_form', [
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider
    ])?>
</div>
