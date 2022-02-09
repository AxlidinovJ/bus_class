<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\ProjectCategory;


class ProjectImg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_img';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['catagory_id', 'img'], 'required'],
            [['catagory_id'], 'integer'],
            [['img'], 'file', 'extensions' => "jpg,png,bmp,jpeg"],
            [['catagory_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectCategory::className(), 'targetAttribute' => ['catagory_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'catagory_id' => 'Catagory ID',
            'img' => 'Img',
        ];
    }

    /**
     * Gets query for [[Catagory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ProjectCategory::className(), ['id' => 'catagory_id']);
    }

}
