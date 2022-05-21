<?php

namespace app\services\funcionarios;

class ValidatorService
{
  public static function validarCpf($cpf)
  {
    $cpf = new \Bissolli\ValidadorCpfCnpj\CPF($cpf);
    return $cpf->isValid();
  }
}