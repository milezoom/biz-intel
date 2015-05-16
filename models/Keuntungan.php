<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Keuntungan extends ActiveRecord
{    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keuntungan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tahun','pendapatan'], 'required'],
            [['tahun'], 'integer'],
            [['pendapatan'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tahun' => 'Tahun',
            'pendapatan' => 'Pendapatan',
        ];
    }
}
?>