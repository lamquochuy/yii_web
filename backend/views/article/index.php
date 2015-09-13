<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ])
    ?>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <div class="box-body">
                    <p>
                        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                             [
                            'attribute' => 'image',
                            'format' => 'html',
                            'label' => 'Image',
                            'value' => function ($data) {
                                return Html::img('../web/uploads/article/'.$data['image'],
                                    ['width' => '40px']);
                            },
                            ],
                            //'id',
                            'title',
                            'article_category_id',
                            //'alias',
                            //summary:ntext',
                            // 'content:ntext',
                            // 'metakey',
                            // 'metadesc',
                            // 'hits',
                            // 'image',
                            //'ordering',
                            'created_by',
                            // 'modified_by',
                            // 'created_time',
                             'modified_time',
                            // 'disable',
                           
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]);
                    ?>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->