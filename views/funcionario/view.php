<?php

use app\assets\funcionario\FuncionarioAsset;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Funcionario */

$this->title = 'Visualizar funcionaro: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Funcionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
FuncionarioAsset::register($this);
?>
<div class="funcionario-view">

  <h1><?= Html::encode($this->title) ?></h1>
  <hr>
  <div class="card funcionario-card">
    <p>
      <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
      <?= Html::a('Deletar', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
    </p>

    <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'nome',
                'cpf',
                'cargo_id',
            ],
        ]) ?>

  </div>
</div>