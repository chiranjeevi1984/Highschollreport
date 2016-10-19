<!--main content start-->
<section id="main-content">
  	<section class="wrapper">            
      		<!--overview start-->
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-user"></i> Students</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="#">Home</a></li>
					<li><i class="fa fa-user"></i>Students</li>												  	
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
		            <a style="margin-bottom: 15px;" class="btn btn-primary pull-right" href="<?php echo yii::$app->homeUrl; ?>student/create" title="Add Students">Add Students</a>
		        </div>
		</div>
		<div class="row">				
          		<div class="col-lg-12">
              			<section class="panel">
					  <div class="table-responsive">
						<table class="table" id="example">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>Register Number</th>
							  <th>Student Name</th>							  
							  <th>Father Name</th>
							  <th>Email</th>
							  <th>Father Mobile Num</th>
							  <th>Action</th>								  
							</tr>
						  </thead>
						  <tbody>
						  	<?php $i = 1;
							foreach($model as $row): ?>
							<tr>
							  <td><?php echo $i; ?></td>
							  <td><?php echo $row['student_regnum']; ?></td>
							  <td><?php echo $row['student_name']; ?></td>
							  <td><?php echo $row['father_name']; ?></td>
							  <td><?php echo $row['email']; ?></td>
							  <td><?php echo $row['mobile_num']; ?></td>
							  <td>
							  	<a href="<?php echo yii::$app->homeUrl; ?>student/view/<?php echo $row['id']; ?>" title="View">
							  		<span class="fa fa-eye"></span>
								</a> 
								<a href="<?php echo yii::$app->homeUrl; ?>student/update/<?php echo $row['id']; ?>" title="Update">
									<span class="fa fa-edit"></span>
								</a> 
								<a href="<?php echo yii::$app->homeUrl; ?>student/delete/<?php echo $row['id']; ?>" title="Delete" 
								onclick='return confirm("Are you sure you want to delete this item?")' data-method="post">
									<span class="fa fa-trash-o"></span>
								</a>
							    </td>								  
							</tr>
							<?php $i++; endforeach; ?>
						  </tbody>
						</table>
					  </div>
				</section>
			</div>
		</div>
  	</section>
</section>
