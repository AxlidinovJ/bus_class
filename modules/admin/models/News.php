<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $content
 * @property string $button_name
 * @property string $button_link
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['title', 'button_link'], 'string', 'max' => 255],
            ['img','file','extensions'=>"jpg,png,bmp,jpeg"],
            [['button_name'], 'string', 'max' => 30],
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
            'content' => 'Content',
            'button_name' => 'Button Name',
            'button_link' => 'Button Link',
        ];
    }
}
