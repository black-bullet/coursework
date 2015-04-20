<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property integer $group_college
 *
 * @property MarkTable[] $markTables
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname'], 'required'],
            [['group_college'], 'integer'],
            [['name', 'surname'], 'string', 'max' => 30]
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
            'surname' => 'Surname',
            'group_college' => 'Group College',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarkTables()
    {
        return $this->hasMany(MarkTable::className(), ['student' => 'id']);
    }
}
