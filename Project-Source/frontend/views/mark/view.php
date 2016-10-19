<?php
use app\models\Subject;
use app\models\Student;

/* @var $this yii\web\View */
/* @var $model app\models\Marks */
/* @var $form yii\widgets\ActiveForm */
?>
<!--main content start-->
<section id="main-content">
  	<section class="wrapper">
	  	<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-table"></i> View Marks</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
					<li><i class="fa fa-table"></i>Marks</li>
					<li><i class="fa fa-table"></i>View Mark</li>
				</ol>
			</div>
		</div>
	
		<?php if(Yii::$app->session->getFlash('success')): ?>
			<div class="alert alert-success fade in">
			  <button data-dismiss="alert" class="close close-sm" type="button">
				<i class="fa fa-times"></i>
			  </button>
			  <strong>Success!</strong> <?php echo Yii::$app->session->getFlash('success'); ?>
			</div>
		<?php endif; ?>
	
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">                             
					</header>
					<div class="panel-body">
						<form class="form-horizontal " method="get">
							<div class="form-group">
								  <label class="col-lg-2 control-label">Subject Name</label>
								  <div class="col-lg-10">
									<?php $student = Student::find()->where(['id' => $model->student_id])->all();?>	
									  <p class="form-control-static"><?php echo $student[0]['student_name']; ?></p>
								  </div>
							</div>
							  
								<div class="form-group">

									<label class="col-lg-2 control-label"></label>
									<div class="col-lg-10">
										<p class="form-control-static"><?php //echo $mark; ?></p>
									</div>
								</div>
																
							<a href="<?php echo Yii::$app->homeUrl;?>mark" class="btn btn-primary">Back</a>
						</form>
					</div>
				</section>
			</div>
		</div>
	</section>
</section>
<!--main content end-->
  
