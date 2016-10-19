<?php

namespace frontend\controllers;

use Yii;
use app\models\AddClass;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AddclassController implements the CRUD actions for AddClass model.
 */
class AddclassController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all AddClass models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
		return $this->redirect('site/login');
	}
	$model = AddClass::find()->all();	

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Displays a single AddClass model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (Yii::$app->user->isGuest) {
		return $this->redirect('site/login');
	}
	return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AddClass model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
		return $this->redirect('site/login');
	}
		
	$model = new AddClass();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
		Yii::$app->session->setFlash('success', 'Class Added Successfully');
            	return $this->redirect(['view', 'id' => $model->class_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AddClass model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->user->isGuest) {
		return $this->redirect('site/login');
	}
		
	$model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
		Yii::$app->session->setFlash('success', 'Class Updated Successfully');
            	return $this->redirect(['view', 'id' => $model->subject_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AddClass model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->isGuest) {
		return $this->redirect('site/login');
	}
		
	$this->findModel($id)->delete();
	Yii::$app->session->setFlash('success', 'Class Deleted Successfully');

        return $this->redirect(['index']);
    }

    /**
     * Finds the AddClass model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AddClass the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AddClass::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
