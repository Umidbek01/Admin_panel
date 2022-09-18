<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $auth_key
 * @property string|null $avatar
 * @property string $created_date
 * @property string $updated_date
 * @property int $creator
 * @property int|null $status
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'created_date', 'updated_date', 'creator'], 'required'],
            [['created_date', 'updated_date'], 'safe'],
            [['creator', 'status'], 'integer'],
            [['username', 'password', 'auth_key', 'avatar'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'avatar' => 'Avatar',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'creator' => 'Creator',
            'status' => 'Status',
        ];
    }
}
