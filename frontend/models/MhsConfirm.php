<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "saatpmb_mhs_regconfirm".
 *
 * @property integer $proper_id
 * @property integer $mhs_noreg
 * @property string $mhs_nama
 * @property string $mhs_panggilan
 * @property string $mhs_gender
 * @property string $mhs_tempatlahir
 * @property string $mhs_tgllahir
 * @property string $mhs_goldarah
 * @property string $mhs_alamat
 * @property string $mhs_kota
 * @property string $mhs_kodepos
 * @property string $mhs_telp
 * @property string $mhs_hp
 * @property string $mhs_email
 * @property string $mhs_warganegara
 * @property string $mhs_password
 * @property string $mhs_hash_confirm
 * @property string $mhs_gereja
 * @property string $mhs_tglkonfirmasi
 *
 * @property SaatpmbHasiltest[] $saatpmbHasiltests
 * @property SaatpmbProdiperiode $proper
 */
class MhsConfirm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'saatpmb_mhs_regconfirm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mhs_gender', 'mhs_tempatlahir', 'mhs_tgllahir', 'mhs_alamat', 'mhs_kota', 'mhs_kodepos', 'mhs_telp', 'mhs_hp', 'mhs_email', 'mhs_warganegara', 'mhs_password', 'mhs_hash_confirm', 'mhs_gereja', 'mhs_tglkonfirmasi'], 'required'],
             [['mhs_imagefile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['proper_id', 'mhs_noreg'], 'integer'],
            [['mhs_tgllahir', 'mhs_tglkonfirmasi'], 'safe'],
            [['mhs_nama', 'mhs_alamat', 'mhs_gereja'], 'string', 'max' => 255],
            [['mhs_panggilan', 'mhs_kota', 'mhs_hash_confirm'], 'string', 'max' => 100],
            [['mhs_gender', 'mhs_kodepos'], 'string', 'max' => 20],
            [['mhs_tempatlahir', 'mhs_telp', 'mhs_hp', 'mhs_email', 'mhs_warganegara', 'mhs_password'], 'string', 'max' => 50],
            [['mhs_goldarah'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'proper_id' => 'Proper ID',
            'mhs_noreg' => 'Nomor Registrasi',
            'mhs_nama' => 'Nama',
            'mhs_panggilan' => 'Nama Panggilan',
            'mhs_gender' => 'Jenis Kelamin',
            'mhs_tempatlahir' => 'Tempat Lahir',
            'mhs_tgllahir' => 'Tanggal Lahir',
            'mhs_goldarah' => 'Gol. Darah',
            'mhs_alamat' => 'Alamat',
            'mhs_kota' => 'Kota',
            'mhs_kodepos' => 'Kodepos',
            'mhs_telp' => 'Telp',
            'mhs_hp' => 'HP',
            'mhs_email' => 'Email',
            'mhs_warganegara' => 'Warganegara',
            'mhs_password' => 'Password',
            'mhs_hash_confirm' => 'HashConfirm',
            'mhs_gereja' => 'Gereja',
            'mhs_tglkonfirmasi' => 'Tglkonfirmasi',
            'mhs_imagefile' => 'Foto'
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->mhs_imagefile->saveAs('uploads/' . $this->mhs_imagefile->baseName . '.' . $this->mhs_imagefile->extension);
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaatpmbHasiltests()
    {
        return $this->hasMany(SaatpmbHasiltest::className(), ['mhs_noreg' => 'mhs_noreg']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProper()
    {
        return $this->hasOne(SaatpmbProdiperiode::className(), ['proper_id' => 'proper_id']);
    }
}
