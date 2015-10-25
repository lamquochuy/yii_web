<?php

namespace frontend\controllers;
//namespace app\controllers;

class AboutController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "home";
        return $this->render('index');
    }

}
