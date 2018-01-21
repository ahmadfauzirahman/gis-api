<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LampuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lampus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lampu-index">

    <h1><?=Html::encode($this->title)?></h1>
    <?php Pjax::begin();?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::a('Create Lampu', ['create'], ['class' => 'btn btn-success'])?>
    </p>

    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id_lampu',[
            'attribute' => 'Nama Rayon',
            'value' => function ($model) {
                return \app\models\Rayon::findOne($model->rayon_id)['nama'];
            }
        ],[
            'attribute' => 'Nama Rayon',
            'value' => function ($model) {
                return \app\models\Trafo::findOne($model->lampu_id)['id_trafo'];
            }
        ],
        'nama',
        [
            'attribute' => 'gambar',
            'format' => 'raw',
            'value' => function ($model) {
                $a = '
<!-- Small modal -->
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#gambar-' . $model->id_lampu .
                '"><img src="assets/gambar/' . $model->gambar . '" width="30px" height="30px"/></button>

<div class="modal fade " id="gambar-' . $model->id_lampu . '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title text-center" id="exampleModalLabel">' . $model->id_lampu . '</h2>
      </div>
      <div class="modal-body text-center">          
        <img src="assets/gambar/' . $model->gambar . '" width="800px"/>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
';

                return $a;
            },
        ],
        //'jenis_lmpu',
        //'watt',
        //'daya',
        //'lat:ntext',
        //'long:ntext',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>
    <?php Pjax::end();?>
</div>
