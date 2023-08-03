<?php

use yii\db\Migration;

/**
 * Class m230729_120735_order
 */
class m230729_120735_order extends Migration
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

        $this->createTable('{{%order}}', [
            'order_id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'user_name' => $this->string(255)->notNull(),
            'user_email' => $this->string(255)->notNull(),
            'user_mobile' => $this->integer(11)->notNull(),
            'user_address' => $this->string(255)->notNull(),
            'payment_id' => $this->integer(11)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
//        echo "m230729_120735_order cannot be reverted.\n";
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
        echo "m230729_120735_order cannot be reverted.\n";

        return false;
    }
    */
}
