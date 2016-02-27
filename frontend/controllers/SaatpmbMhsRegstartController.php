<?php

namespace frontend\controllers;

use Yii;
use frontend\models\SaatpmbMhsRegstart;
use frontend\models\SaatpmbMhsRegstartSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SaatpmbMhsRegstartController implements the CRUD actions for SaatpmbMhsRegstart model.
 */
class SaatpmbMhsRegstartController extends Controller
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
        $searchModel = new SaatpmbMhsRegstartSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SaatpmbMhsRegstart model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Displays a single SaatpmbMhsRegstart model.
     * @param integer $id
     * @return mixed
     */
    public function actionConfirm($id)
    {
        return $this->render('confirm');
    }

    /**
     * Creates a new SaatpmbMhsRegstart model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SaatpmbMhsRegstart();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['confirm', 'id' => $model->seq]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SaatpmbMhsRegstart model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->seq]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SaatpmbMhsRegstart model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SaatpmbMhsRegstart model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SaatpmbMhsRegstart the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SaatpmbMhsRegstart::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function generateUserConfirmHash($id, $name, $date)
    {

    }
}
