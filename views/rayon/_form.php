<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rayon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rayon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_rayon')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lad')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'long')->textarea(['rows' => 2]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
