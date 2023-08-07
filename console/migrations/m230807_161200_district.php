<?php

use yii\db\Migration;

/**
 * Class m230807_161200_district
 */
class m230807_161200_district extends Migration
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

        $this->createTable('{{%district}}', [
            'district_id' => $this->primaryKey(),
            'district_name' => $this->string(255)->notNull(),
            'district_type' => $this->string(255)->notNull(),
            'province_id' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%district}}');
//        echo "m230807_161200_district cannot be reverted.\n";
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
        echo "m230807_161200_district cannot be reverted.\n";

        return false;
    }
    */
}
