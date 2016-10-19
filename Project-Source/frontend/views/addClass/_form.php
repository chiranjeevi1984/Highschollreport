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
                    <label class="col-sm-2 control-label">Class Name</label>
                    <div class="col-sm-10">                                          
                        <?= $form->field($model, 'class_name')->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
                    </div>
                   </div>                                                       
                	 <a href="<?php echo Yii::$app->homeUrl;?>addclass" class="btn btn-primary">Back</a>
                   <?= Html::submitButton($model->isNewRecord ? 'Add' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                
                  <?php ActiveForm::end(); ?>
              </div>
          </section>
      </div>
</div>
