<?php

namespace frontend\controllers;

class ArticleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "home";
        return $this->render('index');
    }
    
    public function actionDetail()
    {
        $this->layout = "home";
        return $this->render('detail');
    }

}
