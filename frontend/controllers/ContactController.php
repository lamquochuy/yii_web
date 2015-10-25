<?php

namespace frontend\controllers;

class ContactController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "home";
        return $this->render('index');
    }

}
