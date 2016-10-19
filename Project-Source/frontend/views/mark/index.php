<?php
use app\models\Student;
use app\models\Subject;
use app\models\AddClass;

/* @var $this yii\web\View */
/* @var $model app\models\Marks */
/* @var $form yii\widgets\ActiveForm */
?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">            
		<!--overview start-->
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-table"></i> Marks</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="#">Home</a></li>
					<li><i class="fa fa-table"></i>Marks</li>												  	
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
				<a style="margin-bottom: 15px;" class="btn btn-primary pull-right" href="<?php echo yii::$app->homeUrl; ?>mark/create" title="Enter Marks">Add to Student Marks</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box blue-bg" id="class_total" style="display:none;">
					<div class="count" style="margin-top:0px; font-size:20px;">
					Class Average <br />
					Student Total : <span id="std_total"></span><br />
					Mark Total : <span id="mar_total"></span><br />
					Total Average : <span id="aver_total"></span>
					</div>						
				</div><!--/.info-box-->			
			</div><!--/.col-->
			
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box green-bg"  id="subject_total" style="display:none;">
					<div class="count" style="margin-top:0px; font-size:20px;">
					Subject Average <br />
					Mark Total : <span id="submar_total"></span><br />
					Total Average : <span id="subaver_total"></span>
					</div>						
				</div><!--/.info-box-->			
			</div><!--/.col-->
		</div>
		<div class="row">				
			<div class="col-lg-12">
				<section class="panel">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
								<td> Class : </td>
								<td>
								<select name="class_name" id="class_name" class="form-control input-sm withfilter">
								<option value="">Select Class</option>
								<?php $clas = AddClass::find()->all(); ?>
								<?php foreach ($clas as $class): ?>
								<option value="<?php echo $class['class_id'];?>"><?php echo $class['class_name'];?></option>
								<?php endforeach;?>
								</select>
								</td>
								<td> Subject : </td>
								<td>
								<select name="subject_name" id="subject_name" class="form-control input-sm withfilter">
								<option value="">Select Subject</option>
								<?php $sub = Subject::find()->all(); ?>
								<?php foreach ($sub as $subj): ?>
								<option value="<?php echo $subj['subject_id'];?>"><?php echo $subj['subject_name'];?></option>
								<?php endforeach;?>
								</select>
								</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<table class="table" id="example">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>Register ID</th>
							  <th>Class</th>
							  <th>Subject</th>
							  <th>Teacher</th>
							  <th>Student</th>
							  <th>Marks</th>
							  <th>Action</th>								  
							</tr>
						  </thead>
						  <tbody id="widthfiltershow">
							<?php $i = 1;
							foreach($model as $row): ?>
							<tr>
							  <td><?php echo $i; ?></td>
							  <?php $register = Student::find()->where(['id' => $row['student_id']])->all();?>								  
							  <td><?php echo $register[0]['student_regnum']; ?></td>
							  <?php $class = AddClass::find()->where(['class_id' => $row['class_id']])->all();?>								  
							  <td><?php echo $class[0]['class_name']; ?></td>	
							  <?php $subject = Subject::find()->where(['subject_id' => $row['subject_id']])->all();?>								  
							  <td><?php echo $subject[0]['subject_name']; ?></td>
							  <td><?php echo $row['teacher_name']; ?></td>
							  <td><?php echo $register[0]['student_name']; ?></td>							  
							  <td><?php echo $row['mark']; ?></td>
							  <td>
								<a href="<?php echo yii::$app->homeUrl; ?>mark/view/<?php echo $row['id']; ?>" title="View">
									<span class="fa fa-eye"></span>
								</a> 
								<a href="<?php echo yii::$app->homeUrl; ?>mark/update/<?php echo $row['id']; ?>" title="Update">
									<span class="fa fa-edit"></span>
								</a> 
								<a href="<?php echo yii::$app->homeUrl; ?>mark/delete/<?php echo $row['id']; ?>" title="Delete" 
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" >
$(document).ready(function() {
	$( ".withfilter" ).on('change' , function() {
		var clas = $("#class_name").val();
		var subj = $("#subject_name").val();
		$.ajax({
				type: "GET",
				url: "<?php echo yii::$app->homeUrl; ?>mark",     
				data: {
					classids: clas, subjects: subj
				},
				success: function (data) { 
				$("#widthfiltershow").empty();	
				$("#widthfiltershow").append(data);
				}    
			});
		$.ajax({
				type: "GET",
				url: "<?php echo yii::$app->homeUrl; ?>mark/findtotal",     
				data: {
					cid: clas, sid: subj
				},
				dataType:'json',
				success: function (response) { 	
					$("#submar_total").empty();
					$("#subaver_total").empty();
					$.each(response, function(key, value){
						console.log(value.total);
						console.log(value.ids);
						var subtotal = value.total;
						var subid = value.ids;
						var subaverage = subtotal / subid;
						$("#subject_total").show();
						$("#submar_total").append(subtotal);
						$("#subaver_total").append(subaverage);
					});				
				}    
			});	
	});
	$( "#class_name" ).on('change' , function() {
		var clasid = $("#class_name").val();
		$.ajax({
				type: "GET",
				url: "<?php echo yii::$app->homeUrl; ?>mark/findclass",     
				data: {
					cid: clasid
				},
				dataType:'json',
				success: function (response) { 	  
					$("#std_total").empty();
					$("#mar_total").empty();
					$("#aver_total").empty();
					$.each(response, function(key, value){
						console.log(value.sids);
						console.log(value.ids);
						var mrk = value.class;
						var clsi = value.cids;
						var claaver = mrk / clsi;
						$("#class_total").show(); 
						$("#std_total").append(value.sids);
						$("#mar_total").append(mrk);
						$("#aver_total").append(claaver);
					});				
				}    
			});
	});	
});
</script>	
