<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject_course".
 *
 * @property integer $id
 * @property integer $numcourse
 * @property integer $group_subject
 *
 * @property Subject[] $subjects
 * @property SubjectGroup $groupSubject
 */
class SubjectCourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject_course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numcourse'], 'required'],
            [['numcourse', 'group_subject'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numcourse' => 'Numcourse',
            'group_subject' => 'Group Subject',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['course_number' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupSubject()
    {
        return $this->hasOne(SubjectGroup::className(), ['id' => 'group_subject']);
    }
}
