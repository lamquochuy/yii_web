<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Url;

class CkeditorController extends \yii\web\Controller {
    
    public function actionUpload() {
        
        $mime_allowed = array(
            'image/jpeg',
            'image/png',
            'image/gif'
        );
        
        $uploadedFile = UploadedFile::getInstanceByName('upload');
        $mime = \yii\helpers\FileHelper::getMimeType($uploadedFile->tempName);
        $file = $uploadedFile->name;
        
        $uploadPath = Yii::getAlias('@webroot') . '/uploads/images/' . $file;
        // check file exists
        if (file_exists($uploadPath)) {
            // remame upload file
            $file = time() . "_" . $uploadedFile->name;
            $uploadPath = Yii::getAlias('@webroot') . '/uploads/images/' . $file;
        }
        $url = Url::to('@web/uploads/images/' . $file);
        
        //extensive suitability check before doing anything with the file…
        if ($uploadedFile == null) {
            $message = "No file uploaded.";
        } else if ($uploadedFile->size == 0) {
            $message = "The file is of zero length.";
        } else if (!in_array ($mime, $mime_allowed)) {
            $message = "The image must be in either JPG or PNG format. Please upload a JPG or PNG instead.";
        } else if ($uploadedFile->tempName == null) {
            $message = "You may be attempting to hack our server. We're on to you; expect a knock on the door sometime soon.";
        } else {
            $message = "";
            $move = $uploadedFile->saveAs($uploadPath);
            if (!$move) {
                $message = "Error moving uploaded file. Check the script is granted Read/Write/Modify permissions.";
            }
        }
        $funcNum = $_GET['CKEditorFuncNum'];
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
        //return $this->render('url');
    }

}
