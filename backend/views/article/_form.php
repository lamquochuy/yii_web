<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Url;

$category =  \app\models\Article_Category::find()->all();

$categoryData=ArrayHelper::map($category,'id','title');

$status = array('0' => 'Enable', '1' => 'Disable');

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255,'onKeyUp' => "remove_unicode('article-title','article-alias');"]) ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => 255]) ?>
    
    <?=  $form->field($model, 'article_category_id')->dropDownList($categoryData, ['prompt'=>'Please select...']);?>

    <?= $form->field($model, 'summary')->widget(CKEditor::className(), [
        'options' => ['rows' => 2],
        'preset' => 'basic',
        'clientOptions' => [
            'filebrowserUploadUrl' => Url::to(['ckeditor/upload'])
        ],
                
    ]) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'clientOptions' => [
            'filebrowserUploadUrl' => Url::to(['ckeditor/upload2'])
        ]
    ]) ?>
    
    <?= $form->field($model, 'metakey')->textInput(['maxlength' => 1024]) ?>

    <?= $form->field($model, 'metadesc')->textInput(['maxlength' => 1024]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'ordering')->textInput(['maxlength' => 10]) ?>

    <?=  $form->field($model, 'disable')->dropDownList($status, ['prompt'=>'Please select...']);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
