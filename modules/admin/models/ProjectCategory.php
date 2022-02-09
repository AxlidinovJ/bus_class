<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "project_category".
 *
 * @property int $id
 * @property string $name
 *
 * @property ProjectImg[] $projectImgs
 */
class ProjectCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * Gets query for [[ProjectImgs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectImgs()
    {
        return $this->hasMany(ProjectImg::className(), ['catagory_id' => 'id']);
    }
     
}
