<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $name
 * @property string $email
 * @property integer $user_noreg
 * @property string $password
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $auth_key
 * @property string $hash_confirm
 * @property integer $active
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property SaatpmbProdiperiode[] $saatpmbProdiperiodes
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'name', 'email', 'user_noreg', 'password', 'password_hash', 'password_reset_token', 'auth_key', 'hash_confirm', 'active', 'status', 'created_at', 'updated_at'], 'required'],
            [['user_noreg', 'active', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'name', 'password_reset_token', 'auth_key'], 'string', 'max' => 255],
            [['email', 'password'], 'string', 'max' => 50],
            [['password_hash', 'hash_confirm'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'name' => 'Name',
            'email' => 'Email',
            'user_noreg' => 'User Noreg',
            'password' => 'Password',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'auth_key' => 'Auth Key',
            'hash_confirm' => 'Hash Confirm',
            'active' => 'Active',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaatpmbProdiperiodes()
    {
        return $this->hasMany(SaatpmbProdiperiode::className(), ['user_id' => 'id']);
    }

    public static function findHash($id) {
        return self::find()->where(['hash_confirm' => $id])
            ->one();
    } 
}
