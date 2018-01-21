<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TrafoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trafo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trafo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trafo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_trafo',
            // 'id_rayon',
            [
                'attribute' => 'Nama Rayon',
                'value' => function ($model) {
                    return \app\models\Rayon::findOne($model->id_rayon)['nama'];
                }
            ],
            'alamat:ntext',
            'status',
            'lat:ntext',
            //'log:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
