<?php

use app\assets\funcionario\FuncionarioAsset;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Funcionario */

$this->title = 'Atualiza Funcionario: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Funcionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
FuncionarioAsset::register($this);
?>
<div class="funcionario-update">

  <h1><?= Html::encode($this->title) ?></h1>
  <hr>
  <div class="card funcionario-card">
    <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
  </div>
</div>