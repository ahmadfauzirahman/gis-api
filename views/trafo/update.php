<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trafo */

$this->title = 'Update Trafo: ' . $model->id_trafo;
$this->params['breadcrumbs'][] = ['label' => 'Trafos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_trafo, 'url' => ['view', 'id' => $model->id_trafo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trafo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
