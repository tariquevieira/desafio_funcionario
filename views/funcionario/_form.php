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
  <?= $form->field($model, 'cep')->textInput(['maxlength' => true]) ?>

  <?= Html::tag('button', 'Buscar Cep', ['class' => 'btn btn-primary', 'data-button' => 'buscar-cep']) ?>

  <?= $form->field($model, 'logradouro')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'numero')->textInput() ?>

  <?= $form->field($model, 'complemento')->textInput(['maxlength' => true]) ?>

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