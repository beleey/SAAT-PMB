<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "saatpmb_prodiperiode".
 *
 * @property integer $proper_id
 * @property integer $periode_id
 * @property integer $prodi_id
 * @property string $create_date
 * @property integer $user_id
 *
 * @property SaatpmbGelombang[] $saatpmbGelombangs
 * @property SaatpmbMhsRegconfirm[] $saatpmbMhsRegconfirms
 * @property SaatpmbPeriode $periode
 * @property SaatpmbProdi $prodi
 * @property User $user
 * @property SaatpmbTest[] $saatpmbTests
 */
class ProdiPeriode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'saatpmb_prodiperiode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['periode_id', 'prodi_id', 'create_date', 'user_id'], 'required'],
            [['periode_id', 'prodi_id', 'user_id'], 'integer'],
            [['create_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'proper_id' => 'Proper ID',
            'periode_id' => 'Periode ID',
            'prodi_id' => 'Prodi ID',
            'create_date' => 'Create Date',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaatpmbGelombangs()
    {
        return $this->hasMany(SaatpmbGelombang::className(), ['proper_id' => 'proper_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaatpmbMhsRegconfirms()
    {
        return $this->hasMany(SaatpmbMhsRegconfirm::className(), ['proper_id' => 'proper_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriode()
    {
        return $this->hasOne(SaatpmbPeriode::className(), ['periode_id' => 'periode_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(SaatpmbProdi::className(), ['prodi_id' => 'prodi_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaatpmbTests()
    {
        return $this->hasMany(SaatpmbTest::className(), ['proper_id' => 'proper_id']);
    }
}
