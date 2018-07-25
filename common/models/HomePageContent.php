<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_page_content".
 *
 * @property integer $id
 * @property string $welcome_content
 * @property integer $year_of_experience
 * @property string $founder_message
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class HomePageContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home_page_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['welcome_content', 'founder_message', 'email','phone','address','year_of_experience'], 'required'],
            [['welcome_content', 'founder_message', 'address'], 'string'],
            [['year_of_experience', 'status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['phone'], 'string', 'max' => 25],
            [['email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'welcome_content' => 'Welcome Content',
            'year_of_experience' => 'Year Of Experience',
            'founder_message' => 'Founder Message',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
