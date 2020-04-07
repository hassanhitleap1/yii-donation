<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%config}}`.
 */
class m200407_155353_create_config_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%config}}', [
            'id' => $this->primaryKey(),
            'confirmed_cases'=> $this->integer(),
            'confirmed_deaths'=>$this->integer(),
            'quarantine_people'=>$this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%config}}');
    }
}
