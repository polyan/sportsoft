<?php

use backend\assets\FeedbackAsset;
use common\models\feedback\Feedback;
use common\models\feedback\FeedbackSearch;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\bootstrap\Html;
use yii\web\View;


/* @var $this View */
/* @var $searchModel FeedbackSearch */
/* @var $dataProvider ActiveDataProvider */
$this->title = 'Список отправленных форм';
$this->params['breadcrumbs'][] = $this->title;
FeedbackAsset::register($this);
?>


<div class="feedback-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => ['class' => 'feedback-row'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Пользователь',
                'attribute' => 'user',
                'value' => 'user.username',
                'filter' => Feedback::getListUsers(),
            ],
            'name',
            'surname',
            'email',
            'phone',
            [
                'attribute' => 'message',
                'contentOptions' => ['class' => 'text-wrap'],
            ],
            [
                'attribute' => 'date_created',
                'filter' => Feedback::getListDates(),
            ],
        ],
    ]); ?>
</div>
