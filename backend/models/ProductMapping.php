<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_mapping".
 *
 * @property integer $id
 * @property integer $category
 * @property integer $subcategory
 * @property string $product_id
 * @property string $variants
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class ProductMapping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_mapping';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'subcategory', 'status', 'CB', 'UB'], 'integer'],
            [['CB', 'UB'], 'required'],
            [['DOC', 'DOU'], 'safe'],
            [['product_id', 'variants'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'subcategory' => 'Subcategory',
            'product_id' => 'Product ID',
            'variants' => 'Variants',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
