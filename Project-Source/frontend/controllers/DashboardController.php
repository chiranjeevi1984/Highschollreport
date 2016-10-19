<?php

namespace frontend\controllers;

use Yii;
use app\models\Subject;
use app\models\Student;
use app\models\AddClass;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class DashboardController extends Controller
{
    /**
     * Displays the count of students and subjects.
     * @return mixed
     */
    public function actionIndex()
    {	
	if (Yii::$app->user->isGuest) {
		return $this->redirect('site/login');
	}
	
	$student = Student::find()->all();
    $subject = Subject::find()->all();
    $class =   AddClass::find()->all();    
        return $this->render('index', [
            'student' => $student,
            'subject' => $subject, 
			'class' => $class,	
        ]);
    }

    
}
