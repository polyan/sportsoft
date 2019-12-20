<?php namespace common\models;

use Yii;

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
 */
class Feedback extends \yii\db\ActiveRecord
{
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
            [['name', 'surname'],
                'string',
                'min' => 3,
                'max' => 255,
            ],
            [['name', 'surname'],
                'match',
                'pattern' => '/^[a-zа-яё\s]+$/iu',
                'message' => 'Только буквы',
            ],
            [['message'], 'string', 'min' => 100, 'max' => 255],
            [['email'], 'email'],
            [['email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            ['verifyCode', 'captcha']
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
            'verifyCode' => "Введите код с картинки:"
        ];
    }
}
