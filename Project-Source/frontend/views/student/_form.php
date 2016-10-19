<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
      <div class="col-lg-12">
          <section class="panel">
              <header class="panel-heading">                             
              </header>
              <div class="panel-body">
                  <?php $form = ActiveForm::begin(
                    [
                        'options' => ['class' => 'form-horizontal'],
                        'fieldConfig' => [                            
                            'options' => [
                                'tag'=>false
                            ]
                        ]
                    
                    ]); ?>
						<div class="form-group">
                          <label class="col-sm-2 control-label">Register Number</label>
                          <div class="col-sm-10">                                          
                              <?= $form->field($model, 'student_regnum')->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
                          </div>
                         </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Student Name</label>
                          <div class="col-sm-10">                                          
                              <?= $form->field($model, 'student_name')->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
                          </div>
                         </div>                                  
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Father Name</label>
                          <div class="col-sm-10">
                              <?= $form->field($model, 'father_name')->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
                          </div>
                         </div> 
						<div class="form-group">
                          <label class="col-sm-2 control-label">Father Mobile Number</label>
                          <div class="col-sm-10">
                              <?= $form->field($model, 'mobile_num')->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
                          </div>                                  
                        </div>						 
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                              <?= $form->field($model, 'email')->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
                          </div>                                  
                        </div>
						<div class="form-group">
                          <label class="col-sm-2 control-label">Address</label>
                          <div class="col-sm-10">
                              <?= $form->field($model, 'address')->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
                          </div>                                  
                        </div>
						<div class="form-group">
                          <label class="col-sm-2 control-label">City</label>
                          <div class="col-sm-10">
                              <?= $form->field($model, 'city')->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
                          </div>                                  
                        </div>
						<div class="form-group">
                          <label class="col-sm-2 control-label">State</label>
                          <div class="col-sm-10">
                              <?= $form->field($model, 'state')->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
                          </div>                                  
                        </div>
						<div class="form-group">
                          <label class="col-sm-2 control-label">Country</label>
                          <div class="col-sm-10">
                              <?= $form->field($model, 'country')->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
                          </div>                                  
                        </div>
						<div class="form-group">
                          <label class="col-sm-2 control-label">Zip Code</label>
                          <div class="col-sm-10">
                              <?= $form->field($model, 'pin_code')->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
                          </div>                                  
                        </div>						
			<a href="<?php echo Yii::$app->homeUrl;?>student" class="btn btn-primary">Back</a>
                        <?= Html::submitButton($model->isNewRecord ? 'Add' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                      
                  <?php ActiveForm::end(); ?>
              </div>
          </section>
      </div>
  </div>
