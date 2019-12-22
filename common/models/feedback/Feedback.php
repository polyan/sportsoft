<?php namespace common\models\feedback;

use common\models\User;
use DateTime;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $message
 * @property string $verifyCode
 * @property string $date_created
 * @property User $user
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @var User $user
     */
    public $user;

    /**
     * @var string
     */
    public $verifyCode;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'verifyCode'], 'required'],
            [
                ['name', 'surname'],
                'string',
                'min' => 3,
                'max' => 255,
            ],
            [
                ['name', 'surname'],
                'match',
                'pattern' => '/^[a-zа-яё\s]+$/iu',
                'message' => 'Только буквы',
            ],
            [['message'], 'string', 'min' => 100, 'max' => 255],
            [['email'], 'email'],
            [['email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            ['verifyCode', 'captcha', 'captchaAction' => 'feedback/captcha']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'email' => 'Email',
            'phone' => 'Телефон',
            'message' => 'Сообщение',
            'verifyCode' => "Введите код с картинки:",
            'date_created' => "Дата отправки",
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['email' => 'email']);
    }

    /**
     * @return array
     */
    public static function getListUsers()
    {
        $arrUsers = [];
        $users = self::find()
            ->joinWith('user')
            ->all();
        foreach ($users as $user) {
            if ($user['user']) {
                $nameUser = $user['user']->username;
                if (!in_array($nameUser, $arrUsers)) {
                    $arrUsers[$nameUser] = $nameUser;
                }
            }
        }

        return $arrUsers;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public static function getListDates()
    {
        /** @var self[] $dates */
        $dates = self::find()
            ->select(['date_created'])
            ->distinct()
            ->orderBy('date_created desc')
            ->all();
        $arrDates = [];
        foreach ($dates as $tempValue) {
            $date = new DateTime($tempValue->date_created);
            $date = $date->format('Y-m-d');
            if (!in_array($date, $arrDates)) {
                $arrDates[$date] = $date;
            }
        }

        return $arrDates;
    }
}
