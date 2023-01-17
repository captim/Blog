<?php

use yii\db\Migration;

/**
 * Class m230117_213020_add_foreign_key_category
 */
class m230117_213020_add_foreign_key_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk-post-category_id',
            'article',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-post-category_id', 'article');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230117_213020_add_foreign_key_category cannot be reverted.\n";

        return false;
    }
    */
}
