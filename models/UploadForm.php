<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

/**
* UploadForm is the model behind the upload form.
*/
class UploadForm extends Model
{
    /**
    * @var UploadedFile|Null file attribute
    */
    public $file;

    /**
    * @return array the validation rules.
    */
    public function rules()
    {
        return [
            [['file'], 
             'file', 
             'checkExtensionByMimeType' => false,
             'extensions' => 'csv',
             'mimeTypes' => [
                 'text/plain',
                 'text/csv',
                 'application/csv',
                 'text/comma-separated-values',
                 'text/csv',
                 'application/csv',
                 'application/excel',
                 'application/vnd.ms-excel',
                 'application/vnd.msexcel'
             ]],
        ];
    }
}
?>