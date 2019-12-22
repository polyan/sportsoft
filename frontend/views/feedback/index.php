<?php

use common\models\feedback\Feedback;
use common\widgets\phoneInput\PhoneInput;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/**
 * @var $feedbackModel Feedback
 */
$this->title = 'Форма обратной связи';
$form = ActiveForm::begin([
    'id' => 'feedback-form',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
]);
echo "<h1><?= Html::encode($this->title) ?></h1>";
echo $form->field($feedbackModel, 'name')->textInput([
    'placeholder' => 'Введите имя',
    'class' => 'input-name form-control'
]);
echo $form->field($feedbackModel, 'surname')->textInput([
    'placeholder' => 'Введите фамилию',
    'class' => 'input-name form-control']);
echo $form->field($feedbackModel, 'email')->textInput([
    'placeholder' => 'Введите email',
    'class' => 'input-email form-control'
]);
try {
    echo $form->field($feedbackModel, 'phone')->widget(PhoneInput::class, [
        'options' => [
            'placeholder' => 'Введите мобильный телефон',
            'class' => 'enter-form__mobile-field form-control input-phone',
        ]
    ]);
} catch (Exception $e) {

}
echo $form->field($feedbackModel, 'verifyCode')->widget(Captcha::class, [
    'captchaAction' => 'feedback/captcha'
]);
echo $form->field($feedbackModel, 'message')->textarea([
    'rows' => 10,
    'placeholder' => 'Введите сообщение'
]);
echo Html::submitButton('Отправить форму', ['class' => 'btn btn-primary']);
ActiveForm::end();
