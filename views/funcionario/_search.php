<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FuncionarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="funcionario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'cpf') ?>

    <?= $form->field($model, 'lougradouro') ?>

    <?= $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'cidade') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'complemento') ?>

    <?php // echo $form->field($model, 'cargo_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
