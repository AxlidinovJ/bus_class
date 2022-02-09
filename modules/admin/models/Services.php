<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $subtitle
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'subtitle'], 'required'],
            [['img', 'subtitle'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
        ];
    }
}
