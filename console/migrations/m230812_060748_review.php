<?php

use yii\db\Migration;

/**
 * Class m230812_060748_review
 */
class m230812_060748_review extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // https://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%review}}', [
            'review_id' => $this->primaryKey(),
            'product_id' => $this->integer(11)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'rating' => $this->integer(),
            'comment' => $this->string(500),
            'created_at' => $this->integer()->notNull()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%review}}');
//        echo "m230812_060748_review cannot be reverted.\n";
//
//        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230812_060748_review cannot be reverted.\n";

        return false;
    }
    */
}
