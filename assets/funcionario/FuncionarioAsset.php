<?php

namespace app\assets\funcionario;

use yii\web\AssetBundle;

class FuncionarioAsset extends AssetBundle
{
  public $basePath = "@webroot";
  public $baseUrl = "@web";

  public $css = [
    'css/assets.css'
  ];
  public $js = [
    'js/funcionario/buscaEndereco.js',
    'js/commons/services/viaCepService.js',
    'js/commons/utils/validaCep.js',
  ];
}
