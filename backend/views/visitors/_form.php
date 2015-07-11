<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Visitors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visitors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => 255,'style'=>'width:250px']) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 100,'style'=>'width:250px']) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 100,'style'=>'width:250px']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 100,'style'=>'width:250px']) ?>

    <?= $form->field($model, 'birthday')->widget(DatePicker::className(), ['language' => 'en', 'dateFormat' => 'yyyy-MM-dd',]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => 50,'style'=>'width:250px']) ?>

    <?php echo $form->field($model, 'gender')->dropDownList(['1' => 'Male', '2' => 'Female'], ['prompt' => 'Select...']); ?>

    <?= $form->field($model, 'picture')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model, 'status')->dropDownList(['0' => 'Enable', '1' => 'Disable'], ['prompt' => 'Select...']); ?>

    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
