<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <div class="form-group has-feedback">
                        <?= $form->field($model, 'username') ?>
                    </div>
                    <div class="form-group has-feedback">
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                                    </div> 
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div><!-- /.col -->
                    </div>
                <?php ActiveForm::end(); ?>

                <a href="#">I forgot my password</a><br>
                <a href="register.html" class="text-center">Register a new membership</a>

            </div><!-- /.login-box-body -->
        </div>
