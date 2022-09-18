<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project_categories}}`.
 */
class m220728_141759_create_project_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project_categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'images' => $this->string(255)->null(),
            'status' => $this->tinyInteger()->defaultValue(1),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project_categories');
    }
}
