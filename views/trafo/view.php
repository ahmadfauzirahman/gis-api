<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Trafo */

$this->title = $model->id_trafo;
$this->params['breadcrumbs'][] = ['label' => 'Trafo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trafo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_trafo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_trafo], [
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
            'id_trafo',
            [
                'attribute' => 'Nama Rayon',
                'value' => function ($model) {
                    return \app\models\Rayon::findOne($model->id_rayon)['nama'];
                }
            ],
            'alamat:ntext',
            'status',
            'lat:ntext',
            'log:ntext',
        ],
    ]) ?>

</div>
