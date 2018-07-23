<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_management".
 *
 * @property integer $id
 * @property integer $type
 * @property string $tittle
 * @property string $product_id
 * @property integer $sort_order
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class HomeManagement extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'home_management';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                        [['type'], 'required'],
                        [['type', 'sort_order', 'status', 'CB', 'UB'], 'integer'],
                        [['DOC', 'DOU', 'product_id'], 'safe'],
                        [['tittle',], 'string', 'max' => 500],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'type' => 'Type',
                    'tittle' => 'Tittle',
                    'product_id' => 'Products',
                    'sort_order' => 'Sort Order',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

        public static function Products($id) {

                $designation = explode(',', $id);
                $designations = '';
                $i = 0;
                if (!empty($designation)) {
                        foreach ($designation as $des) {

                                if ($i != 0) {
                                        $designations .= ',<br>';
                                }
                                $designation_name = Product::findOne($des);
                                if (!empty($designation_name)) {
                                        $designations .= $designation_name->product_name;
                                } else {
                                        $designations = '';
                                }
                                $i++;
                        }
                }

                return $designations;
        }

}
