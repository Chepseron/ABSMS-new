<?php

namespace app\controllers;

use app\models\Whatsapp;
use app\models\WhatsappSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WhatsappController implements the CRUD actions for Whatsapp model.
 */
class WhatsappController extends Controller
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
     * Lists all Whatsapp models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WhatsappSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Whatsapp model.
     * @param int $idwhatsapp Idwhatsapp
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idwhatsapp)
    {
        return $this->render('view', [
            'model' => $this->findModel($idwhatsapp),
        ]);
    }

    /**
     * Creates a new Whatsapp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Whatsapp();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idwhatsapp' => $model->idwhatsapp]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Whatsapp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idwhatsapp Idwhatsapp
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idwhatsapp)
    {
        $model = $this->findModel($idwhatsapp);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idwhatsapp' => $model->idwhatsapp]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Whatsapp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idwhatsapp Idwhatsapp
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idwhatsapp)
    {
        $this->findModel($idwhatsapp)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Whatsapp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idwhatsapp Idwhatsapp
     * @return Whatsapp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idwhatsapp)
    {
        if (($model = Whatsapp::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
