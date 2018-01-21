<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LampuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lampu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_lampu') ?>

    <?= $form->field($model, 'rayon_id') ?>

    <?= $form->field($model, 'lampu_id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'gambar') ?>

    <?php // echo $form->field($model, 'jenis_lmpu') ?>

    <?php // echo $form->field($model, 'watt') ?>

    <?php // echo $form->field($model, 'daya') ?>

    <?php // echo $form->field($model, 'lat') ?>

    <?php // echo $form->field($model, 'long') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
