<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rayon */

$this->title = 'Update Rayon: ' . $model->id_rayon;
$this->params['breadcrumbs'][] = ['label' => 'Rayons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rayon, 'url' => ['view', 'id' => $model->id_rayon]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rayon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
