<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<!--main content start-->
<section id="main-content">
  	<section class="wrapper">
	  	<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> Add Class</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="#">Home</a></li>
					<li><i class="fa fa-file-text-o"></i>Class</li>
					<li><i class="fa fa-file-text-o"></i>Add Class</li>
				</ol>
			</div>
		</div>
		
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
	  
	</section>
</section>
<!--main content end-->
  
