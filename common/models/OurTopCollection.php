<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "our_top_collection".
 *
 * @property integer $id
 * @property integer $collection
 * @property string $image
 * @property string $alt_tag
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class OurTopCollection extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'our_top_collection';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['alt_tag', 'collection'], 'required'],
            [['collection', 'status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['image', 'alt_tag'], 'string', 'max' => 100],
            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, png,jpeg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'collection' => 'Collection',
            'image' => 'Image',
            'alt_tag' => 'Alt Tag',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
