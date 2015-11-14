<?php

namespace frontend\controllers;
use frontend\models\Home;
use frontend\models\Sysconfig;
//namespace app\controllers;

class HomeController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        // lấy danh sách bài viết
        $article = Home::find()->limit(5)->all();
        // lấy nội dung about 
        $about = Sysconfig::find()->where(['code' => 'about'])->one();
        //lây bài viết phổ biến
        $popular_article = Home::find()->orderBy(['hits' => SORT_DESC])->limit(2)->all();
        $new_article = Home::find()->orderBy(['created_time' => SORT_DESC])->limit(2)->all();
//        echo $article_popular->createCommand()->sql;
//        var_dump($article_popular);
//        print_r($article_popular);
//        $article = Home::find()->where(['id' => 21])->one();
//        print_r($article);
        $this->layout = "home";
        return $this->render('index',[
                'model' => $article, 'about' => $about, 'popular_article' => $popular_article, 'new_article' => $new_article
            ]);
    }

}
