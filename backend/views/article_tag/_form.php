<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article_Tag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article--tag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'article_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'tag_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'modified_by')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'disable')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
