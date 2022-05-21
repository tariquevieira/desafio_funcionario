<?php

use app\assets\funcionario\FuncionarioAsset;
use app\models\Funcionario;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FuncionarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Funcionarios';
$this->params['breadcrumbs'][] = $this->title;
FuncionarioAsset::register($this);
?>
<div class="funcionario-index">

  <h1><?= Html::encode($this->title) ?></h1>
  <hr>
  <p>
    <?= Html::a('Novo Funcionário', ['create'], ['class' => 'btn btn-success']) ?>
  </p>

  <?php // echo $this->render('_search', ['model' => $searchModel]); 
  ?>
  <div class="card funcionario-card">
    <?= GridView::widget([
      'dataProvider' => $dataProvider,
      'filterModel' => $searchModel,
      'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'nome',
        'cpf',
        //'lougradouro',
        //'cep',
        //'cidade',
        //'estado',
        //'numero',
        //'complemento',
        //'cargo_id',
        [
          'class' => ActionColumn::class,
          'urlCreator' => function ($action, Funcionario $model, $key, $index, $column) {
            return Url::toRoute([$action, 'id' => $model->id]);
          }
        ],
      ],
    ]); ?>
    <div>



    </div>