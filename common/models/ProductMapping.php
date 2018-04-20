<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_mapping".
 *
 * @property integer $id
 * @property integer $category
 * @property string $product_id
 * @property string $variants
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class ProductMapping extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'product_mapping';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['category', 'status', 'CB', 'UB'], 'integer'],
            [['product_id'], 'required'],
            [['DOC', 'DOU'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'product_id' => 'Products',
            'variants' => 'Variants',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

    public function getProducts($id) {
        $product = explode(',', $id);
        $result = '';
        $i = 0;
        if (!empty($product)) {
            foreach ($product as $val) {
                if ($i != 0) {
                    $result .= ', ';
                }
                $product_data = Product::findOne($val);
                $result .= $product_data->product_name;
                $i++;
            }
        }
        return $result;
    }

    public static function mapped() {
        $filter = '';
        $mapped = ProductMapping::find()->all();
        foreach ($mapped as $map) {
            $exploded = explode(',', $map->product_id);
            foreach ($exploded as $explod) {
                $filter[] = $explod;
            }
        }
        return $filter;
    }

    public static function mapped_edit($id) {
        $filter = '';
        $mapped = ProductMapping::find()->where(['<>', 'id', $id])->all();
        foreach ($mapped as $map) {
            $exploded = explode(',', $map->product_id);
            foreach ($exploded as $explod) {
                $filter[] = $explod;
            }
        }
        return $filter;
    }

}
