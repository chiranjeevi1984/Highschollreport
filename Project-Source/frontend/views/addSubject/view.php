<!--main content start-->
<section id="main-content">
  <section class="wrapper">
  <div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-user"></i> View Subject</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="#">Home</a></li>
				<li><i class="fa fa-file-text-o"></i>Subjects</li>
				<li><i class="fa fa-file-text-o"></i>View Subject</li>
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
								<p class="form-control-static"><?php echo $model->subject_name; ?></p>
							</div>
						</div>                                 
						<a href="<?php echo Yii::$app->homeUrl;?>addsubject" class="btn btn-primary">Back</a>
					</form>
				  </div>
			</section>
		</div>
	</div>
</section>
</section>
<!--main content end-->
  
