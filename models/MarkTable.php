<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mark_table".
 *
 * @property integer $id
 * @property integer $student
 * @property integer $subject
 * @property integer $mark
 *
 * @property Student $student0
 * @property Subject $subject0
 */
class MarkTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mark_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student', 'subject', 'mark'], 'required'],
            [['student', 'subject', 'mark'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student' => 'Student',
            'subject' => 'Subject',
            'mark' => 'Mark',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent0()
    {
        return $this->hasOne(Student::className(), ['id' => 'student']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject0()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject']);
    }
}
