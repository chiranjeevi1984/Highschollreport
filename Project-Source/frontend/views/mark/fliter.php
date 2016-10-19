<?php
use app\models\Student;
use app\models\Subject;
use app\models\AddClass;
/* @var $this yii\web\View */
/* @var $model app\models\Marks */
/* @var $form yii\widgets\ActiveForm */
?>
<?php if(count($model)>0) { $i = 1; 
foreach($model as $row):?>
<tr>
  <td><?php echo $i; ?></td>
  <?php $student = Student::find()->where(['id' => $row['student_id']])->all();?>
  <td><?php echo $student[0]['student_regnum']; ?></td>	
  <td><?php $class = AddClass::find()->where(['class_id' => $row['class_id']])->all();?>
  <?php echo $class[0]['class_name']; ?>
  </td>
  <td><?php $subjectn = Subject::find()->where(['subject_id' => $row['subject_id']])->all();?>
  <?php echo $subjectn[0]['subject_name']; ?></td>							  
  <td><?php echo $row['teacher_name']; ?></td>							  								  
  <td><?php echo $student[0]['student_name']; ?></td>						  
  <td>
  <?php echo $row['mark']; ?>
  <input type="hidden" name="average<?php echo $i; ?>" id="average<?php echo $i; ?>" value="<?php echo $row['mark']; ?>" />
  </td>
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
<?php $i++; endforeach; } else {?>
<script>
alert('No data of class and subject?'); 
</script>
<?php } ?>