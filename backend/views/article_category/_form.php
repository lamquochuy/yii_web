<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$category =  \app\models\Article_Category::find()->all();

$categoryData=ArrayHelper::map($category,'id','title');

$status = array('0' => 'Enable', '1' => 'Disable');

/* @var $this yii\web\View */
/* @var $model app\models\Article_Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article--category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'metakey')->textInput(['maxlength' => 1024]) ?>

    <?= $form->field($model, 'metadesc')->textInput(['maxlength' => 1024]) ?>

    <?=  $form->field($model, 'parent_id')->dropDownList($categoryData, ['prompt'=>'Please select...']);?>
    
   

    <?= $form->field($model, 'ordering')->textInput() ?>

    <?= $form->field($model, 'hits')->textInput() ?>

    <?=  $form->field($model, 'disable')->dropDownList($status, ['prompt'=>'Please select...']);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
