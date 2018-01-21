<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rayon".
 *
 * @property string $id_rayon
 * @property string $nama
 * @property string $lad
 * @property string $long
 */
class Rayon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rayon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_rayon'], 'required'],
            [['lad', 'long'], 'string'],
            [['id_rayon'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 255],
            [['id_rayon'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_rayon' => 'Id Rayon',
            'nama' => 'Nama',
            'lad' => 'Lad',
            'long' => 'Long',
        ];
    }
}
