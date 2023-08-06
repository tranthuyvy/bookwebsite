<?php

use yii\db\Migration;

/**
 * Class m230806_061002_wishlist
 */
class m230806_061002_wishlist extends Migration
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

        $this->createTable('{{%wishlist}}', [
            'wishlist_id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'product_id' => $this->integer(11)->notNull(),
            'created_at' => $this->integer()->notNull()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%wishlist}}');
//        echo "m230806_061002_wishlist cannot be reverted.\n";
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
        echo "m230806_061002_wishlist cannot be reverted.\n";

        return false;
    }
    */
}
