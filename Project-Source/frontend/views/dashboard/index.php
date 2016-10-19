<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
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
				<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="#">Home</a></li>
					<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box blue-bg">
					<i class="fa fa-user"></i>
					<div class="count"><?php echo count($student); ?></div>
					<div class="title">Students</div>						
				</div><!--/.info-box-->			
			</div><!--/.col-->
			
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box green-bg">
					<i class="fa fa-book"></i>
					<div class="count"><?php echo count($subject); ?></div>
					<div class="title">Subjects</div>						
				</div><!--/.info-box-->			
			</div><!--/.col-->
			
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="info-box orange-bg">
					<i class="fa fa-book"></i>
					<div class="count"><?php echo count($class); ?></div>
					<div class="title">Class</div>						
				</div><!--/.info-box-->			
			</div><!--/.col-->
			
		</div><!--/.row-->
		<div class="row"><!--/.row-->
			<div class="col-lg-12">
				<ol class="breadcrumb" style="height:50px;">
					<li style="padding: 5px;">Class</li>
					<li>
						<select name="class_name" id="class_name" class="dashboard_filter">
							<option value="">Select Class</option>
							<?php $clas = AddClass::find()->all(); ?>
							<?php foreach ($clas as $class): ?>
							<option value="<?php echo $class['class_id'];?>"><?php echo $class['class_name'];?></option>
							<?php endforeach;?>
						</select>
					</li>
					<li style="padding: 5px;">Subject</li>
					<li>
						<select name="subject_name" id="subject_name" class="dashboard_filter">
								<option value="">Select Subject</option>
								<?php $sub = Subject::find()->all(); ?>
								<?php foreach ($sub as $subj): ?>
								<option value="<?php echo $subj['subject_id'];?>"><?php echo $subj['subject_name'];?></option>
								<?php endforeach;?>
						</select>
					</li>
				</ol>
			</div>
		</div><!--/.row-->
		<div class="row"><!--/.row-->
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="info-box purple-bg">
					<i class="fa fa-book"></i>
					<div class="count" style="font-size:25px;">
					Class Average <br />
					Student Total : <span id="std_total"></span><br /><br />
					Mark Total : <span id="mar_total"></span><br />
					Total Average : <span id="aver_total"></span> %
					</div>						
				</div><!--/.info-box-->			
			</div><!--/.col-->
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="info-box pink-bg">
					<i class="fa fa-search"></i>
					<div class="count" style="font-size:25px;">
					Subject Average <br />
					Mark Total : <span id="submar_total"></span><br />
					Total Average : <span id="subaver_total"></span> %
					</div>						
				</div><!--/.info-box-->			
			</div><!--/.col-->
		</div><!--/.row-->
	</section>
</section>
<!--main content end-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" >
$(document).ready(function() {
	$( ".dashboard_filter" ).on('change' , function() {
		var clas = $("#class_name").val();
		var subj = $("#subject_name").val();
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