<?php

use yii\db\Migration;

/**
 * Class m220729_124740_projects_table
 */
class m220729_124740_projects_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('projects', [
            'id' => $this->primaryKey(),
            'category_id'=> $this->integer(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->string(255)->notNull(),
            'first_image' => $this->string(255)->notNull(),
            'second_image' => $this->string(255)->notNull(),
            'third_image' => $this->string(255)->notNull(),
            'project_link' => $this->string(255)->notNull(),
            'status' => $this->tinyInteger()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220729_124740_projects_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220729_124740_projects_table cannot be reverted.\n";

        return false;
    }
    */
}
