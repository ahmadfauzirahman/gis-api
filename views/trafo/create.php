<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Trafo */

$this->title = 'Create Trafo';
$this->params['breadcrumbs'][] = ['label' => 'Trafos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trafo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
