<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lampu */

$this->title = 'Create Lampu';
$this->params['breadcrumbs'][] = ['label' => 'Lampus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lampu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
