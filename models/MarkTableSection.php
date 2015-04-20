<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mark_table_section".
 *
 * @property integer $id
 * @property string $name
 * @property integer $group_college
 */
class MarkTableSection extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mark_table_section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['group_college'], 'integer'],
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
            'group_college' => 'Group College',
        ];
    }
}
