<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220520_153901_create_funcionarios_table_
 */
class m220520_153901_create_funcionarios_table_ extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('funcionarios', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(30)->notNull(),
            'cpf' => $this->string(15)->notNull(),
            'lougradouro' => $this->string(60)->notNull(),
            'cep' => $this->string(8)->notNull(),
            'cidade' => $this->string(30)->notNull(),
            'estado' => $this->string(2)->notNull(),
            'numero' => $this->integer()->notNull(),
            'complemento' => $this->string(60),
            'cargo_id' => $this->integer(),
        ]);
        $this->addForeignKey('fk_funcionarios_cargo_id', 'funcionarios', 'cargo_id', 'cargos', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('funcionarios');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220520_153901_create_funcionarios_table_ cannot be reverted.\n";

        return false;
    }
    */
}