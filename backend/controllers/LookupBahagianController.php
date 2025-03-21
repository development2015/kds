<?php

namespace backend\controllers;

use Yii;
use common\models\LookupBahagian;
use common\models\LookupBahagianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LookupBahagianController implements the CRUD actions for LookupBahagian model.
 */
class LookupBahagianController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                /*'actions' => [
                    'delete' => ['post'],
                ],*/
            ],
        ];
    }

    /**
     * Lists all LookupBahagian models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LookupBahagianSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LookupBahagian model.
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
     * Creates a new LookupBahagian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LookupBahagian();

        if ($model->load(Yii::$app->request->post()) && $model->save() ) {
            Yii::$app->getSession()->setFlash('berjaya', 'Maklumat Bahagian <b>('.$model->bahagian.')</b> Berjaya Di Simpan');
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing LookupBahagian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->getSession()->setFlash('berjaya', 'Maklumat Bahagian <b>('.$model->bahagian.')</b> Berjaya Di Kemaskini');
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing LookupBahagian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        Yii::$app->getSession()->setFlash('berjaya', 'Maklumat Bahagian Berjaya Di Padam');

        return $this->redirect(['index']);
    }

    /**
     * Finds the LookupBahagian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LookupBahagian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LookupBahagian::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
