<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $password
 * @property integer $role
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    const ROLE_USER =10;
    const ROLE_ADMIN = 20;

    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role'], 'required'],
            [['role'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 20],
            ['role', 'in', 'range' => [self::ROLE_USER, self::ROLE_ADMIN]],
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
            'password' => 'Password',
            'role' => 'Role',
        ];
    }

    public static function isUserAdmin($name)
    {
        if(static::findOne(['name'=>$name,'role'=>self::ROLE_ADMIN]))
        {
            return true;
        }else{
            return false;
        }
    }

    public static function isGroupAdmin($name)
    {
        if(static::findOne(['name'=>$name,'role'=>self::ROLE_USER]))
        {
            return true;
        }else{
            return false;
        }
    }

}
