<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "saatpmb_periode".
 *
 * @property integer $periode_id
 * @property string $periode_name
 * @property integer $tahun
 *
 * @property SaatpmbProdiperiode[] $saatpmbProdiperiodes
 */
class Periode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'saatpmb_periode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['periode_name', 'tahun'], 'required'],
            [['tahun'], 'integer'],
            [['periode_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'periode_id' => 'Periode ID',
            'periode_name' => 'Periode Name',
            'tahun' => 'Tahun',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaatpmbProdiperiodes()
    {
        return $this->hasMany(SaatpmbProdiperiode::className(), ['periode_id' => 'periode_id']);
    }

    public static function getPeriodeActive()
    {
        return Periode::find()->where(['status' => 1])->one();
    }
}
