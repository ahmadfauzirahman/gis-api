<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trafo".
 *
 * @property string $id_trafo
 * @property string $id_rayon
 * @property string $alamat
 * @property string $status
 * @property string $lat
 * @property string $log
 */
class Trafo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trafo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_trafo', 'id_rayon', 'alamat', 'status', 'lat', 'log'], 'required'],
            [['alamat', 'status', 'lat', 'log'], 'string'],
            [['id_trafo', 'id_rayon'], 'string', 'max' => 20],
            [['id_trafo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_trafo' => 'Kode Trafo',
            'id_rayon' => 'Nama Rayon',
            'alamat' => 'Alamat',
            'status' => 'Status',
            'lat' => 'Lat',
            'log' => 'Log',
        ];
    }
}
