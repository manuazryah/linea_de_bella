<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shop_collections".
 *
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property string $sub_title
 * @property string $link
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class ShopCollections extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'shop_collections';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['link', 'sub_title', 'title'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['image', 'title', 'sub_title'], 'string', 'max' => 100],
            [['link'], 'string', 'max' => 500],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'title' => 'Title',
            'sub_title' => 'Sub Title',
            'link' => 'Link',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
