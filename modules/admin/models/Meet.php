<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "meet".
 *
 * @property int $id
 * @property string $name
 * @property string $company
 * @property string $img
 */
class Meet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'company'], 'required'],
            [['name', 'company'], 'string', 'max' => 20],
            [['img'], 'file', 'extensions' => "jpg,png,bmp,jpeg"],
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
            'company' => 'Company',
            'img' => 'Img',
        ];
    }
}
