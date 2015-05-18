<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Performance;

class PerformanceSearch
{
    public function getListDivisi()
    {
        $divisi = array();
        foreach(Performance::find()->select('divisi')->distinct()->all() as $data){
            array_push($divisi,$data->divisi);
        }
        sort($divisi);
        
        return $divisi;
    }
    
    public function getDataByDivisi()
    {
        $listOfDivisi = array();
        
        foreach(self::getListDivisi() as $data){
            $listOfDivisi[$data] = Performance::find()->where(['divisi' => $data])->asArray()->all();
        }
        
        return $listOfDivisi;        
    }
    
    public function getCountByLamaKerja()
    {
        $data = array();
        
        $data["<6"] = Performance::find()->where("lama_kerja < 6")->count();
        $data["6-12"] = Performance::find()->where("lama_kerja >= 6 and lama_kerja <= 12")->count();
        $data[">12"] = Performance::find()->where("lama_kerja < 12")->count();
        
        return $data;
    }
}

?>