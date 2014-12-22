<?php

use yii\db\Schema;
use yii\db\Migration;

class m141222_194541_config extends Migration
{
    public function safeUp()
    {
        $options = ($this->db->getDriverName() === 'mysql') ? 'ENGINE=InnoDB DEFAULT CHARSET=utf8' : null;
        $this->createTable(
            '{{%config}}',
            [
                'id' => Schema::TYPE_PK,
                'name' => Schema::TYPE_STRING . '(64) NOT NULL DEFAULT \'\'',
                'value' => Schema::TYPE_TEXT,
            ],
            $options
        );
        $this->createIndex('config_name', '{{%config}}', ['name'], true);
    }

    public function safeDown()
    {
        $this->dropTable('{{%config}}');
    }
}