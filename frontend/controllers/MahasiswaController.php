<?php

namespace frontend\controllers;

use Yii;
use frontend\models\MhsConfirm;
use frontend\models\MhsConfirmSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class MahasiswaController extends Controller 
{
	public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all SaatpmbMhsRegstart models.
     * @return mixed
     */
    public function actionIndex()
    {
    	$this->layout = "mahasiswa-base";
        return $this->render('index');
    }

    /**
     * Lists all SaatpmbMhsRegstart models.
     * @return mixed
     */
    public function actionInput_data()
    {
        $this->layout = "mahasiswa-base";
        $model = new MhsConfirm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('input-data', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                // file is uploaded successfully
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
    
    /**
     * Finds the MhsConfirm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MhsConfirm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MhsConfirm::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
?>