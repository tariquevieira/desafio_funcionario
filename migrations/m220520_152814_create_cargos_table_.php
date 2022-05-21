<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220520_152814_create_cargos_table_
 */
class m220520_152814_create_cargos_table_ extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cargos', [
            'id' => 'pk',
            'nome' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('cargos');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220520_152814_create_cargos_table_ cannot be reverted.\n";

        return false;
    }
    */
}