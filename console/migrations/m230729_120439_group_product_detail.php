<?php

use yii\db\Migration;

/**
 * Class m230729_120439_group_product_detail
 */
class m230729_120439_group_product_detail extends Migration
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

        $this->createTable('{{%group_product_detail}}', [
            'group_product_detail_id' => $this->primaryKey(),
            'group_id' => $this->integer(11)->notNull(),
            'product_id' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%group_product_detail}}');
//        echo "m230729_120439_group_product_detail cannot be reverted.\n";
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
        echo "m230729_120439_group_product_detail cannot be reverted.\n";

        return false;
    }
    */
}
