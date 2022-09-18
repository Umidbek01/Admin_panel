<?php

use yii\db\Migration;

/**
 * Class m220802_050755_sponsors_table
 */
class m220802_050755_sponsors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('skills', [
            'id' => $this->primaryKey(),
            'sponsor_name' => $this->string(255)->notNull(),
            'images' => $this->string(255)->notNull(),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220802_050755_sponsors_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220802_050755_sponsors_table cannot be reverted.\n";

        return false;
    }
    */
}
