<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject_group".
 *
 * @property integer $id
 * @property string $name
 *
 * @property SubjectCourse[] $subjectCourses
 */
class SubjectGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectCourses()
    {
        return $this->hasMany(SubjectCourse::className(), ['group_subject' => 'id']);
    }
}
