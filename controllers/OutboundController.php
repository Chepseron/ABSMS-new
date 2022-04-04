<?php

namespace app\controllers;

use app\models\Outbound;
use app\models\OutboundSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OutboundController implements the CRUD actions for Outbound model.
 */
class OutboundController extends Controller {

    /**
     * @inheritDoc
     */
    public function behaviors() {
        return array_merge(
                parent::behaviors(), [
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
     * Lists all Outbound models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new OutboundSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);





        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Outbound model.
     * @param string $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Outbound model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Outbound();


        $now = new \DateTime();
        $datetime = $now->format('Y-m-d h:i:s');
        $model->created_at = $datetime;
        $model->updated_at = $datetime;
        $model->sent_at = $datetime;
        $model->last_send = $datetime;




        if ($this->request->isPost) {
            $url = 'http://107.20.199.106';
            $ch = curl_init($url);
            $data = ['from' => 'KENYAONLINE', 'to' => '254728140544', 'text' => 'test message'];
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            $headers = [];
            $headers[] = 'Content-Type:application/json';
            $headers[] = "Authorization: Bearer " . base64_encode("D-Account:@Demo2019");
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);

            print_r($result);
            echo $result;


//            $timeStamp = time();
//            $signature = "PzT8pyp4" . "Gu8oVnVh" . $timeStamp;
//            $url = "https://api.onbuka.com/v3/sendSms?appId=Gi0TU0FK&numbers=254728140544&content=Test sms&senderId=SMSafrica";
//            $ch = curl_init();
//            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//            curl_setopt($ch, CURLOPT_URL, $url);
//            $headers = array(
//                "Sign:" . md5($signature),
//                "Content-Type: application/json",
//                "Timestamp: $timeStamp",
//                "Api-Key: PzT8pyp4",
//            );
//            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
//            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//            $result = curl_exec($ch);
//            if ($model->load($this->request->post()) && $model->save()) {
//                return $this->redirect(['view', 'id' => $model->id]);
//            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Outbound model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Outbound model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Outbound model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id ID
     * @return Outbound the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Outbound::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
