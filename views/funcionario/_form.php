<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Funcionario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="funcionario-form">

  <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'cargo_id')
    ->dropDownList(
      $cargos,           // Flat array ('id'=>'label')
      ['prompt' => '']    // options
    ); ?>

  <div class="form-group">
    <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
  </div>

  <?php ActiveForm::end(); ?>

</div>