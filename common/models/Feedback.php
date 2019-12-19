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
 */
class Feedback extends \yii\db\ActiveRecord
{
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
            [['name', 'surname'], 'required'],
            [['name', 'surname'],
                'string',
                'min' => 3,
                'max' => 255,
            ],
            [['name', 'surname'],
                'match',
                'pattern' => '/^[a-zA-Zа-яА-Я\s]+$/',
                'message' => 'Только буквы',
            ],
            [['message'], 'string', 'min' => 100, 'max' => 255],
            [['email'], 'email'],
            [['email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'email' => 'Email',
            'phone' => 'Phone',
            'message' => 'Message',
        ];
    }
}
