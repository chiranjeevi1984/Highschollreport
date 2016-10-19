<!--main content start-->
<section id="main-content">
  	<section class="wrapper">
	  	<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-user"></i> View Student</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
					<li><i class="fa fa-users"></i>Students</li>
					<li><i class="fa fa-user"></i>View Student</li>
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
	                              <label class="col-lg-2 control-label">Register Number</label>
	                              <div class="col-lg-10">
	                                  <p class="form-control-static"><?php echo $model->student_regnum; ?></p>
	                              </div>
	                           </div>	
	                           <div class="form-group">
	                              <label class="col-lg-2 control-label">Student Name</label>
	                              <div class="col-lg-10">
	                                  <p class="form-control-static"><?php echo $model->student_name; ?></p>
	                              </div>
	                           </div>
	                          <div class="form-group">
	                              <label class="col-lg-2 control-label">Father Name</label>
	                              <div class="col-lg-10">
	                                  <p class="form-control-static"><?php echo $model->father_name; ?></p>
	                              </div>
	                          </div>
							  <div class="form-group">
	                              <label class="col-lg-2 control-label">Father Mobile Number</label>
	                              <div class="col-lg-10">
	                                  <p class="form-control-static"><?php echo $model->mobile_num; ?></p>
	                              </div>
	                          </div>
	                          <div class="form-group">
	                              <label class="col-lg-2 control-label">Email</label>
	                              <div class="col-lg-10">
	                                  <p class="form-control-static"><?php echo $model->email; ?></p>
	                              </div>
	                          </div>
							  <div class="form-group">
	                              <label class="col-lg-2 control-label">Address</label>
	                              <div class="col-lg-10">
	                                  <p class="form-control-static"><?php echo $model->address; ?></p>
	                              </div>
	                          </div>
							  <div class="form-group">
	                              <label class="col-lg-2 control-label">City</label>
	                              <div class="col-lg-10">
	                                  <p class="form-control-static"><?php echo $model->city; ?></p>
	                              </div>
	                          </div>
							  <div class="form-group">
	                              <label class="col-lg-2 control-label">State</label>
	                              <div class="col-lg-10">
	                                  <p class="form-control-static"><?php echo $model->state; ?></p>
	                              </div>
	                          </div><div class="form-group">
	                              <label class="col-lg-2 control-label">Country</label>
	                              <div class="col-lg-10">
	                                  <p class="form-control-static"><?php echo $model->country; ?></p>
	                              </div>
	                          </div>
							  <div class="form-group">
	                              <label class="col-lg-2 control-label">Zip Code</label>
	                              <div class="col-lg-10">
	                                  <p class="form-control-static"><?php echo $model->pin_code; ?></p>
	                              </div>
	                          </div>
	                          <a href="<?php echo Yii::$app->homeUrl;?>student" class="btn btn-primary">Back</a>
	                      </form>
	                  </div>
	              </section>
	          </div>
	      </div>
	</section>
</section>
<!--main content end-->
  
