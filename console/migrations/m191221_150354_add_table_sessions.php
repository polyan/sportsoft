<?php

use yii\db\Migration;

/**
 * Class m191221_150354_add_table_sessions
 */
class m191221_150354_add_table_sessions extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%session}}', [
            'id' => $this->string(40)->notNull(),
            'expire' => $this->integer(),
            'data' => $this->binary(429496729),
            'user_id' => $this->integer(),
            'last_write' => $this->integer(),
        ], $tableOptions);

        $this->addPrimaryKey("id", '{{%session}}', 'id');
    }

    public function down()
    {
        $this->dropTable('{{%session}}');
    }
}
