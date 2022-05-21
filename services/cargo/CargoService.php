<?php

namespace app\services\cargo;

use app\models\Cargo;
use yii\helpers\ArrayHelper;

class CargoService
{
  /**
   * Função estatica
   * @return array
   */
  public static function cargoArray()
  {
    $cargosFormatados = ArrayHelper::map(Cargo::find()->all(), 'id', 'nome');
    return $cargosFormatados;
  }
}