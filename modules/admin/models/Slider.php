<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $year
 * @property string $title
 * @property string $subtitle
 * @property string $button_name
 * @property string $button_link
 * @property string $bg
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'title', 'subtitle'], 'required'],
            [['subtitle'], 'string'],
            [['year', 'title', 'button_name', 'button_link'], 'string', 'max' => 255],
            ['bg','file','extensions'=>"jpg,png,bmp,jpeg"],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'year' => 'Year',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'button_name' => 'Button Name',
            'button_link' => 'Button Link',
            'bg' => 'Fon uchun rasm',
        ];
    }
}
