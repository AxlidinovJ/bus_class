<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "call".
 *
 * @property int $id
 * @property string $text
 * @property string $address
 * @property string $number
 * @property string $email
 */
class Call extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'call';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'address', 'number', 'email'], 'required'],
            [['text', 'address', 'number', 'email'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'address' => 'Address',
            'number' => 'Number',
            'email' => 'Email',
        ];
    }
}
