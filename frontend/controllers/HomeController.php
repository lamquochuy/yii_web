<?php

namespace frontend\controllers;
//namespace app\controllers;

class HomeController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        $this->layout = "home";
        return $this->render('index');
    }

}
