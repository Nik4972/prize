<?php

use yii\db\Migration;

/**
 * Handles the creation of table `prize`.
 */
class m181118_160333_create_prize_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('prize', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('prize');
    }
}
