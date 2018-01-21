<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrafoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trafo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_trafo') ?>

    <?= $form->field($model, 'id_rayon') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'lat') ?>

    <?php // echo $form->field($model, 'log') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
