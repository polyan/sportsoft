<?php

use backend\assets\LoginAsset;
use yii\helpers\Html;
use yii\web\JqueryAsset;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model \common\models\LoginForm */

$this->title = 'Авторизация';
JqueryAsset::register($this);
LoginAsset::register($this);

$form = ActiveForm::begin([
    'id' => 'login-form',
    'method' => 'post'
]);

echo "<div id='user-img' style=\"background: url('" . Yii::getAlias('@web') . "/images/login.png') no-repeat center center\"><div 
        id='plushka'></div><div 
        id='plushka-2'></div><div id='plushka-login'></div><div id='plushka-login-2'></div></div>";
echo $form->field($model, 'username')->textInput();
echo $form->field($model, 'password')->passwordInput();
?>
    <div id="login-len"></div>
    <div class="form-group">
        <div class="text-right">
            <?php

            echo Html::submitButton('Войти', ['id' => 'login-btn', 'name' => 'login-button']);
            ?>

        </div>
    </div>
<?php

if (!Yii::$app->user->isGuest) {
    echo '<div id="in-cabinet-login">Вы авторизованы в личном кабинете, <a href="' .
        Yii::$app->user->identity->getDefaultUrl() . '">перейти в кабинет</a></div>';
}

echo ' <a href="'. Url::to('/backend/login/request-password-reset') .'" id="password-reset">Забыли пароль</a>';

ActiveForm::end();

?>
