<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "saatpmb_mhs_regstart".
 *
 * @property integer $seq
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $hash_confirm
 * @property string $input_date
 */
class SaatpmbMhsRegstart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'saatpmb_mhs_regstart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password', 'password_repeat'], 'required'],
            [['input_date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['email', 'password', 'password_repeat'], 'string', 'max' => 50],
            ['email','email'],
            [['hash_confirm'], 'string', 'max' => 100],
            ['password_repeat', 'compare', 'compareAttribute' => 'password']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'seq' => 'Seq',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat', 'Confirm Password',
            'hash_confirm' => 'Hash Confirm',
            'input_date' => 'Input Date',
        ];
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert) {
        if(isset($this->name)) 
            $this->hash_confirm = bin2hex(openssl_random_pseudo_bytes(64));
            date_default_timezone_set('Asia/Jakarta');
            $this->input_date = date('Y-m-d H:i:s');
        return parent::beforeSave($insert);
    }

}
