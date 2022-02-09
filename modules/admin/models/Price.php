<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "price".
 *
 * @property int $id
 * @property string $title
 * @property int $price
 * @property string $month
 * @property string $price_item
 * @property string $button_name
 * @property string $button_link
 */
class Price extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'price', 'month', 'price_item'], 'required'],
            [['price','status'], 'integer'],
            [['price_item'], 'string'],
            [['title', 'month', 'button_link'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'price' => 'Price',
            'month' => 'Month',
            'price_item' => 'Price Item',
            'button_name' => 'Button Name',
            'button_link' => 'Button Link',
        ];
    }
}
