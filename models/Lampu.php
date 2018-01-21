<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lampu".
 *
 * @property string $id_lampu
 * @property string $rayon_id
 * @property string $lampu_id
 * @property string $nama
 * @property string $gambar
 * @property string $jenis_lmpu
 * @property int $watt
 * @property int $daya
 * @property string $lat
 * @property string $long
 */
class Lampu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lampu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_lampu'], 'required'],
            [
                ['gambar'] ,
                'file' ,
                'skipOnEmpty' => TRUE ,
                'extensions'  => 'png, jpg' ,
            ] ,
            [['watt', 'daya'], 'integer'],
            [['id_lampu', 'rayon_id', 'lampu_id','lat','long'], 'string', 'max' => 20],
            [['nama', 'jenis_lmpu'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_lampu' => 'Lampu ID',
            'rayon_id' => 'Nama Rayon',
            'lampu_id' => 'ID Trafo',
            'nama' => 'Nama',
            'gambar' => 'Gambar',
            'jenis_lmpu' => 'Jenis Lmpu',
            'watt' => 'Watt',
            'daya' => 'Daya',
            'lat' => 'Lat',
            'long' => 'Long',
        ];
    }
}
