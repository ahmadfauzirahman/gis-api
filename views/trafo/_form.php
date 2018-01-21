<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Rayon;
/* @var $this yii\web\View */
/* @var $model app\models\Trafo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trafo-form">

    <?php $form = ActiveForm::begin();?>

    <?=$form->field($model, 'id_trafo')->textInput(['maxlength' => true])?>
    <?=$form->field($model, 'id_rayon')->dropDownList(ArrayHelper::map(Rayon::find()->all(), 'id_rayon', 'nama'), ['prompt' => 'Pilih Nama Rayon'])?>
    <?=$form->field($model, 'alamat')->textarea(['rows' => 2])?>

    <?=$form->field($model, 'status')->dropDownList(['non_meterisasi' => 'Non meterisasi', 'meterisasi' => 'Meterisasi', 'rusak' => 'Rusak', 'legal' => 'Legal'], ['prompt' => 'Select Status'])?>

    <?=$form->field($model, 'lat')->textarea(['rows' => 1])?>

    <?=$form->field($model, 'log')->textarea(['rows' => 1])?>

    <div class="form-group">
        <?=Html::submitButton('Save', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end();?>

</div>
