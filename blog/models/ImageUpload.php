<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{

    public $image;

    public function rules()
    {
        return [
            [['image'],'required'],
            [['image'],'file','extensions' => 'jpg,png']
        ];
    }
    //Получаем загруженые картинки
    public function uploadFile($file,$currentImage)
    {
        $this->image = $file;

        if ($this->validate())
        {
            //Вызываем метод deleteCurrentImage
            $this->deleteCurrentImage($currentImage);

            return $this->saveImage();
        }
    }

    //Путь сохранения картинок
    private function getFolder()
    {
        return Yii::getAlias('@web') . 'uploads/';
    }
    //генерация к имени картинки
    private function generateFilename()
    {
        return strtolower(uniqid($this->image->baseName)) . '.' . $this->image->extension;
    }
    //Перезапись и удаление предыдущей картинки на новую из папки
    public function deleteCurrentImage($currentImage)
    {
       //Вызываем метод fileExists по условию
        if ($this->fileExists($currentImage))
        {
            //Перезаписываем картинку, если картинка уже существует
            unlink($this->getFolder() . $currentImage);
        }
    }

    public function fileExists($currentImage)
    {
       if (!empty($currentImage) && $currentImage != null)
       {
           //Проверка, если картинка существует то тогда выполнится условие
           return file_exists($this->getFolder() . $currentImage);
       }
    }
    //Загрузка картинки и возврат обратно
    public function saveImage()
    {
        //Вызываем метод generateFilename
        $filename = $this->generateFilename();

        //Сохранение картинки с помощью метода getFolder
        $this->image->saveAs($this->getFolder() . $filename);

        return $filename;
    }
}
?>