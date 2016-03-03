<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "saatpmb_prodi".
 *
 * @property integer $prodi_id
 * @property string $prodi_name
 * @property string $prodi_desc
 *
 * @property SaatpmbProdiperiode[] $saatpmbProdiperiodes
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'saatpmb_prodi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prodi_name', 'prodi_desc'], 'required'],
            [['prodi_desc'], 'string'],
            [['prodi_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prodi_id' => 'Prodi ID',
            'prodi_name' => 'Prodi Name',
            'prodi_desc' => 'Prodi Desc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaatpmbProdiperiodes()
    {
        return $this->hasMany(SaatpmbProdiperiode::className(), ['prodi_id' => 'prodi_id']);
    }
}
