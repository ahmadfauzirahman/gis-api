<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lampu */

$this->title = 'Update Lampu: ' . $model->id_lampu;
$this->params['breadcrumbs'][] = ['label' => 'Lampus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lampu, 'url' => ['view', 'id' => $model->id_lampu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lampu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
