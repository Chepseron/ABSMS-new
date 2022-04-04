<?php

namespace app\controllers;

use app\models\Whatsappmenus;
use app\models\WhatsappmenusSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WhatsappmenusController implements the CRUD actions for Whatsappmenus model.
 */
class WhatsappmenusController extends Controller
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
     * Lists all Whatsappmenus models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WhatsappmenusSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Whatsappmenus model.
     * @param int $idwhatsappMenus Idwhatsapp Menus
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idwhatsappMenus)
    {
        return $this->render('view', [
            'model' => $this->findModel($idwhatsappMenus),
        ]);
    }
    
     public function actionReceive($idwhatsappMenus)
    {
        return $this->render('view', [
            'model' => $this->findModel($idwhatsappMenus),
        ]);
    }

    /**
     * Creates a new Whatsappmenus model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Whatsappmenus();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idwhatsappMenus' => $model->idwhatsappMenus]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Whatsappmenus model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idwhatsappMenus Idwhatsapp Menus
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idwhatsappMenus)
    {
        $model = $this->findModel($idwhatsappMenus);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idwhatsappMenus' => $model->idwhatsappMenus]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Whatsappmenus model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idwhatsappMenus Idwhatsapp Menus
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idwhatsappMenus)
    {
        $this->findModel($idwhatsappMenus)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Whatsappmenus model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idwhatsappMenus Idwhatsapp Menus
     * @return Whatsappmenus the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idwhatsappMenus)
    {
        if (($model = Whatsappmenus::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
