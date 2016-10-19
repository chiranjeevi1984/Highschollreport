<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Student;
use app\models\Subject;
use app\models\AddClass;

/* @var $this yii\web\Update */
/* @var $model app\models\Marks */
/* @var $form yii\widgets\ActiveForm */
?>

<!--main content start-->
<section id="main-content">
  	<section class="wrapper">
	  	<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-table"></i> Update Marks</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="#">Home</a></li>
					<li><i class="fa fa-table"></i>Marks</li>
					<li><i class="fa fa-table"></i>Update Marks</li>
				</ol>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">                             
					</header>
					<div class="panel-body">
						<?php $form = ActiveForm::begin([
							'options' => ['class' => 'form-horizontal'],
							'fieldConfig' => ['options' => ['tag'=>false ]]							
						]); ?>
						
						<div class="form-group">
						  <label class="col-sm-2 control-label">Class Name</label>
						  <div class="col-sm-10">
							<?php $items = ArrayHelper::map(AddClass::find()->all(), 'class_id', 'class_name'); ?>
							<?= $form->field($model, 'class_id')->dropDownList($items,['prompt' => 'Select Class'],['class' => 'form-control m-bot15','disabled' => 'disabled'])->label(false); ?>
							<?= $form->field($model, 'class_id')->hiddenInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
						  </div>
						</div>
						
						<div class="form-group">
						  <label class="col-sm-2 control-label">Subject Name</label>
						  <div class="col-sm-10">
							<?php $items = ArrayHelper::map(Subject::find()->all(), 'subject_id', 'subject_name'); ?>
							<?= $form->field($model, 'subject_id')->dropDownList($items,['prompt' => 'Select Subject'],['class' => 'form-control m-bot15','disabled' => 'disabled'])->label(false); ?>
							<?= $form->field($model, 'subject_id')->hiddenInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
						  </div>
						</div>
						
						<div class="form-group">
							  <label class="col-sm-2 control-label">Student Name</label>
							  <div class="col-sm-10">									  
								<?php $items = ArrayHelper::map(Student::find()->all(), 'id', 'student_name'); ?>
								<?= $form->field($model, 'student_id')->dropDownList($items,['prompt' => 'Select Student','class' => 'form-control m-bot15','disabled' => 'disabled'])->label(false); ?>
								  <?= $form->field($model, 'student_id')->hiddenInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
							  </div>							  
						 </div> 
						 
						<div class="form-group">
						  <label class="col-sm-2 control-label">Marks</label>
						  <div class="col-sm-10">							  
							   <?= $form->field($model, "mark")->textInput(['maxlength' => true,'class' => 'form-control'])->label(false); ?>
						  </div>
						</div>
						
						 <a href="<?php echo Yii::$app->homeUrl;?>mark" class="btn btn-primary">Back</a>
						 <?= Html::submitButton($model->isNewRecord ? 'Enter' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
					  
						 <?php ActiveForm::end(); ?>
					</div>
				</section>
			</div>
		</div>	  
	</section>
</section>
<!--main content end-->
