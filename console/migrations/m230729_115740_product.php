<?php

use yii\db\Migration;

/**
 * Class m230729_115740_product
 */
class m230729_115740_product extends Migration
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

        $this->createTable('{{%product}}', [
            'product_id' => $this->primaryKey(),
            'product_name' => $this->string(255)->notNull(),
            'product_image' => $this->string(255)->notNull(),
            'product_price' => $this->decimal(10,2)->notNull(),
            'product_description' => $this->text(),
            'group_id' => $this->integer(11)->notNull(),
            'supplier_id' => $this->integer(11)->notNull(),
            'author_id' => $this->integer(11)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'user_id' => $this->integer(11)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
//        echo "m230729_115740_product cannot be reverted.\n";
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
        echo "m230729_115740_product cannot be reverted.\n";

        return false;
    }
    */
}
