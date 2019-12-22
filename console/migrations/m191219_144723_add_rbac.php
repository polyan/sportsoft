<?php

use yii\db\Migration;

/**
 * Class m191219_144723_add_rbac
 */
class m191219_144723_add_rbac extends Migration
{
    const TABLE_USER = 'user';
    const COLUMN_RBAC_ROLE = 'rbac_role';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            self::TABLE_USER,
            self::COLUMN_RBAC_ROLE,
            $this->string(255)->notNull()->after('password_hash')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(self::TABLE_USER, self::COLUMN_RBAC_ROLE);
    }

}
