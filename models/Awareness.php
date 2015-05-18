<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Schema;

class Awareness extends ActiveRecord
{
    public $awal;
    public $akhir;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'awareness';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama','umur','jenis_kelamin','daerah','is_know','awal','akhir'], 'required'],
            [['umur'], 'integer'],
            [['awal'], 'integer'],
            [['akhir'], 'integer'],
            [['nama'], 'string', 'max' => 35],
            [['jenis_kelamin'], 'string', 'max' => 10],
            [['daerah'], 'string', 'max' => 20],
            [['is_know'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'umur' => 'Umur',
            'jenis_kelamin' => 'Jenis Kelamin',
            'daerah' => 'Daerah Asal',
            'is_know' => 'Tahu Tentang Tokomedia'
        ];
    }
}
?>