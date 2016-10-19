<!--main content start-->
<section id="main-content">
  	<section class="wrapper">            
      		<!--overview start-->
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> Subjects</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="#">Home</a></li>
					<li><i class="fa fa-file-text-o"></i>Subjects</li>												  	
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
		            <a style="margin-bottom: 15px;" class="btn btn-primary pull-right" href="<?php echo yii::$app->homeUrl; ?>addsubject/create" title="Add">Add Subjects</a>
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
							  <th>Subject Name</th>
							  <th>Action</th>								  
							</tr>
						  </thead>
						  <tbody>
						  	<?php $i = 1;
							foreach($model as $row): ?>
							<tr>
							  <td><?php echo $i; ?></td>
							  <td><?php echo $row['subject_name']; ?></td>
							  <td>
							  	<a href="<?php echo yii::$app->homeUrl; ?>addsubject/view/<?php echo $row['subject_id']; ?>" title="View">
							  		<span class="fa fa-eye"></span>
								</a> 
								<a href="<?php echo yii::$app->homeUrl; ?>addsubject/update/<?php echo $row['subject_id']; ?>" title="Update">
									<span class="fa fa-edit"></span>
								</a> 
								<a href="<?php echo yii::$app->homeUrl; ?>addsubject/delete/<?php echo $row['subject_id']; ?>" title="Delete" 
								onclick='return confirm("Are you sure you want to delete this item?")'>
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
  
  
