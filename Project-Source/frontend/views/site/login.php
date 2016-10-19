<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<?php $form = ActiveForm::begin([
			'id' => 'login-form', 
			'options' => 
			['class' => 'login-form'],		
			'fieldConfig' => [                          
				'options' => [
					'tag'=>false
				]
			]		
		]); ?>        
        <div class="login-wrap">
            <p class="login-img">
			<i class="icon_lock_alt"></i> Administrator
			</p>
            <div class="form-group">                           
			 <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class' => 'form-control','placeholder' => 'Username'])->label(false); ?>  
            </div>
            <div class="form-group">                               
			<?= $form->field($model, 'password')->passwordInput(['class' => 'form-control','placeholder' => 'Password'])->label(false); ?>
            </div>     
	    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-lg btn-block', 'name' => 'login-button']) ?>
        </div>
<?php ActiveForm::end(); ?>
