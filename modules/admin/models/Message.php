<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property string $time
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            [['message'], 'string'],
            [['time'], 'safe'],
            [['name'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 50],
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
            'email' => 'Email',
            'message' => 'Message',
            'time' => 'Time',
        ];
    }
}
