<?php

namespace app\controllers;

use app\models\Gbm;
use app\models\GbmSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GbmController implements the CRUD actions for Gbm model.
 */
class GbmController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Gbm models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GbmSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Gbm model.
     * @param int $idgbm Idgbm
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idgbm)
    {
        return $this->render('view', [
            'model' => $this->findModel($idgbm),
        ]);
    }

    /**
     * Creates a new Gbm model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Gbm();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idgbm' => $model->idgbm]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Gbm model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idgbm Idgbm
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idgbm)
    {
        $model = $this->findModel($idgbm);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idgbm' => $model->idgbm]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Gbm model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idgbm Idgbm
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idgbm)
    {
        $this->findModel($idgbm)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Gbm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idgbm Idgbm
     * @return Gbm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idgbm)
    {
        if (($model = Gbm::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
