<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property integer $id
 * @property string $brand
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 * @property integer $status
 */
class Brand extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'brand';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                        [['brand'], 'required'],
                        [['brand'], 'unique'],
                        [['CB', 'UB', 'status'], 'integer'],
                        [['DOC', 'DOU', 'canonical_name', 'banner_image','collection_image'], 'safe'],
                        [['brand'], 'string', 'max' => 200],
                        [['banner_image','collection_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'brand' => 'Collection',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                    'status' => 'Status',
                ];
        }

}
