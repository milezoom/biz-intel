<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Performance extends ActiveRecord
{    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'performance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['divisi', 'nama', 'jenis_pekerjaan'], 'required'],
            [['lama_kerja', 'performa', 'kepemimpinan', 'kedisplinan', 'time_management'], 'integer'],
            [['divisi'], 'string', 'max' => 30],
            [['nama'], 'string', 'max' => 35],
            [['jenis_pekerjaan'], 'string', 'max' => 55]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'divisi' => 'Divisi',
            'nama' => 'Nama',
            'jenis_pekerjaan' => 'Jenis Pekerjaan',
            'lama_kerja' => 'Lama Kerja (dalam bulan)',
            'performa' => 'Nilai Performa Bekerja',
            'kepemimpinan' => 'Nilai Kepemimpinan',
            'kedisiplinan' => 'Nilai Kedisiplinan',
            'time_management' => 'Nilai Kemampuan Mengatur Waktu',
        ];
    }
}
?>