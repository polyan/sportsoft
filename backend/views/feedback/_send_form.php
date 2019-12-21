<?php

use common\models\feedback\Feedback;
use common\models\feedback\FeedbackSearch;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;

/* @var $searchModel FeedbackSearch */
/* @var $dataProvider ActiveDataProvider */

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'rowOptions' => ['class' => 'feedback-row'],
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
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
]);
