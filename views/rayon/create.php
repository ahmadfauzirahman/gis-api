<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Rayon */

$this->title = 'Create Rayon';
$this->params['breadcrumbs'][] = ['label' => 'Rayons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rayon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
