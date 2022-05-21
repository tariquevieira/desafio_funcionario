<?php

use app\assets\funcionario\FuncionarioAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Funcionario */

$this->title = 'Novo Funcionário';
$this->params['breadcrumbs'][] = ['label' => 'Funcionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
FuncionarioAsset::register($this);
?>
<div class="funcionario-create">

  <h1><?= Html::encode($this->title) ?></h1>
  <hr>
  <div class="card funcionario-card">
    <?= $this->render('_form', [
            'model' => $model,
            'cargos' => $cargos
        ]) ?>

  </div>


</div>