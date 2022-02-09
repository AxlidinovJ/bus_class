<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "stat".
 *
 * @property int $id
 * @property int $completed
 * @property int $hours
 * @property int $feedbacks
 * @property int $clients
 * @property string $title
 * @property string $sub_title
 */
class Stat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['completed', 'hours', 'feedbacks', 'clients', 'title', 'sub_title'], 'required'],
            [['completed', 'hours', 'feedbacks', 'clients'], 'integer'],
            [['sub_title'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'completed' => 'Completed',
            'hours' => 'Hours',
            'feedbacks' => 'Feedbacks',
            'clients' => 'Clients',
            'title' => 'Title',
            'sub_title' => 'Sub Title',
        ];
    }
}
