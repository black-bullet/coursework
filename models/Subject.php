<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $name
 * @property integer $system_mark
 * @property integer $course_number
 *
 * @property MarkTable[] $markTables
 * @property SubjectCourse $courseNumber
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'system_mark', 'course_number'], 'required'],
            [['system_mark', 'course_number'], 'integer'],
            [['name'], 'string', 'max' => 30]
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
            'system_mark' => 'System Mark',
            'course_number' => 'Course Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarkTables()
    {
        return $this->hasMany(MarkTable::className(), ['subject' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse0()
    {
        return $this->hasOne(SubjectCourse::className(), ['id' => 'course_number']);
    }
}
