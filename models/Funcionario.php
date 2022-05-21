<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionarios".
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $logradouro
 * @property string $cep
 * @property string $cidade
 * @property string $estado
 * @property int $numero
 * @property string|null $complemento
 * @property int|null $cargo_id
 *
 * @property Cargos $cargo
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'logradouro', 'cep', 'cidade', 'estado', 'numero'], 'required'],
            [['numero', 'cargo_id'], 'integer'],
            [['nome', 'cidade'], 'string', 'max' => 30],
            [['cpf'], 'string', 'max' => 15],
            [['logradouro', 'complemento'], 'string', 'max' => 60],
            [['cep'], 'string', 'max' => 8],
            [['estado'], 'string', 'max' => 2],
            [['cargo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cargo::class, 'targetAttribute' => ['cargo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cpf' => 'Cpf',
            'logradouro' => 'logradouro',
            'cep' => 'Cep',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'numero' => 'Numero',
            'complemento' => 'Complemento',
            'cargo_id' => 'Cargo ID',
        ];
    }

    /**
     * Gets query for [[Cargo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCargo()
    {
        return $this->hasOne(Cargo::class, ['id' => 'cargo_id']);
    }
}
