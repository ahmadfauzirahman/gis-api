<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lampu */

$this->title = $model->id_lampu;
$this->params['breadcrumbs'][] = ['label' => 'Lampus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lampu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_lampu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_lampu], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_lampu',
            // 'rayon_id',
            [
                'attribute' => 'Nama Rayon',
                'value' => function ($model) {
                    return \app\models\Rayon::findOne($model->rayon_id)['nama'];
                }
            ],
            'lampu_id',
            'nama',
            [
                'label' => 'gambar' ,
                'format' => 'raw' ,
                'value' => '<button type="button" class="btn btn-default"
            data-toggle="modal"
            data-target="#gambar-' . $model->id_lampu . '"><img src="assets/gambar/' . $model->gambar . '" width="30px" height="30px"/></button>

<div class="modal fade " id="gambar-' . $model->id_lampu . '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title text-center" id="exampleModalLabel">' . $model->id_lampu. '</h2>
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
',
            ] ,
            'jenis_lmpu',
            'watt',
            'daya',
            'lat:ntext',
            'long:ntext',
        ],
    ]) ?>

</div>
