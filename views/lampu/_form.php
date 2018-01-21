<?php

use app\models\Rayon;
use app\models\Trafo;
use kartik\widgets\FileInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Lampu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lampu-form">

    <?php $form = ActiveForm::begin();?>

    <?=$form->field($model, 'id_lampu')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'rayon_id')->dropDownList(ArrayHelper::map(Rayon::find()->all(), 'id_rayon', 'nama'), ['prompt' => 'Select Nama Trafo'])?>
    <?=$form->field($model, 'lampu_id')->dropDownList(ArrayHelper::map(Trafo::find()->all(), 'id_trafo', 'id_trafo'), ['prompt' => 'Select Id Trafo'])?>
    <?=$form->field($model, 'nama')->textInput(['maxlength' => true])?>

    <?php
$data = isset($model->gambar) ? [
    'pluginOptions' => [
        'initialPreview' => 'assets/' . $model->gambar,
        'initialPreviewAsData' => true,
        'initialCaption' => "$model->id_lampu",
    ],
] : [];
?>
            <?=$form->field($model, 'gambar')->widget(FileInput::className(), $data)?>
    <?=$form->field($model, 'jenis_lmpu')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'watt')->textInput()?>

    <?=$form->field($model, 'daya')->textInput()?>

    <?=$form->field($model, 'lat')->textarea(['rows' => 6])?>

    <?=$form->field($model, 'long')->textarea(['rows' => 6])?>

    <div class="form-group">
        <?=Html::submitButton('Save', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end();?>

</div>
