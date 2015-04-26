<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "group_college".
 *
 * @property integer $id
 * @property string $name
 * @property integer $section
 */
class GroupCollege extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'group_college';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['section'], 'integer'],
            [['name'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'section' => 'Section',
        ];
    }

    public function getSection0()
    {
        return $this->hasOne(Section::className(),['id'=>'section']);
    }

}
