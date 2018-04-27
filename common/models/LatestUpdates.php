<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "latest_updates".
 *
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property string $description
 * @property string $date
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class LatestUpdates extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'latest_updates';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['description', 'title'], 'required'],
            [['description'], 'string'],
            [['date', 'DOC', 'DOU'], 'safe'],
            [['status', 'CB', 'UB'], 'integer'],
            [['image', 'title'], 'string', 'max' => 100],
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
            'description' => 'Description',
            'date' => 'Date',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
