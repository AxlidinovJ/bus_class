<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property int $id
 * @property string $bg
 * @property string $subtext
 * @property string $text
 * @property string $button_name
 * @property string $button_link
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bg', 'subtext', 'text', 'button_name', 'button_link'], 'required'],
            [['bg', 'subtext', 'text', 'button_link'], 'string', 'max' => 255],
            [['button_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bg' => 'Bg',
            'subtext' => 'Subtext',
            'text' => 'Text',
            'button_name' => 'Button Name',
            'button_link' => 'Button Link',
        ];
    }
}
