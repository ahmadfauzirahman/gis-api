<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 05/11/17
 * Time: 8:16
 */

namespace app\api\modules\v1\controllers;

use app\models\Lampu;
use app\models\Trafo;
use kartik\time\TimePicker;
use yii\rest\Controller;
use Yii;
use yii\web\Response;

class VideoController extends Controller
{
    public function actionIndex()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $response = null;
        if (Yii::$app->request->isPost) {
            $dataTrafo = Yii::$app->request->post();

            $response = Lampu::find()->where(['lampu_id' => $dataTrafo['id_trafo']])->andWhere(['rayon_id'=>$dataTrafo['id_rayon']])->all();
        }
        return $response;
    }

    public function actionRayon()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $response = null;
        if (Yii::$app->request->isGet) {

            $response = Yii::$app->db->createCommand('select `nama`,`lad` ,`long` FROM rayon')->queryAll();
        }
        return $response;
    }

    public function actionTrafo()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;
        if (Yii::$app->request->isPost) {
            $dataRayon = Yii::$app->request->post();
            $dataTravo = Trafo::find()->where(['id_rayon' => $dataRayon['id_rayon']])->all();
            return $dataTravo;
        }
    }



}