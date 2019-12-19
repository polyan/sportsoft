<?php

use common\models\Feedback;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var $feedbackModel Feedback
 */

echo "<br><br><br>";
$form = ActiveForm::begin([
    'id' => 'feedback-form',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
]);
echo Html::tag('h1', 'Форма обратной связи');
echo $form->field($feedbackModel, 'name')->textInput();
echo $form->field($feedbackModel, 'surname')->textInput();
echo $form->field($feedbackModel, 'email')->textInput();

echo Html::submitButton('Отправить форму', ['class' => 'btn btn-primary']);
ActiveForm::end();
