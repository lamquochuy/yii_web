<?php

namespace frontend\controllers;

use frontend\models\Article;
use yii\data\Pagination;

class ArticleController extends \yii\web\Controller {

    public function actionIndex() {
        $this->layout = "home";

        // lấy danh sách bài viết
        $query = Article::find()->where(['disable' => 0]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();

        return $this->render('index', [
                    'models' => $models,
                    'pages' => $pages,
        ]);
    }

    public function actionDetail() {
        $this->layout = "home";
        return $this->render('detail');
    }

}
