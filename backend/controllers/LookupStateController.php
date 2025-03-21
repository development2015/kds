<?php

namespace backend\controllers;

use Yii;
use common\models\LookupState;
use common\models\LookupStateSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\CountState;

/**
 * LookupStateController implements the CRUD actions for LookupState model.
 */
class LookupStateController extends Controller
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
     * Lists all LookupState models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LookupStateSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LookupState model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new LookupState model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LookupState();
        $model_count = new CountState();

        if ($model->load(Yii::$app->request->post()) ) {

            if ($model->save()) {
                $last_id = Yii::$app->db->getLastInsertID();

                $model_count->state_id = $last_id;
                $model_count->save();
            }
            
            Yii::$app->getSession()->setFlash('berjaya', 'Maklumat Negeri <b>('.$model->state.')</b> Berjaya Di Simpan');
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing LookupState model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->state_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing LookupState model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        CountState::deleteAll(['state_id'=>$id]);

        return $this->redirect(['index']);
    }

    /**
     * Finds the LookupState model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return LookupState the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LookupState::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
