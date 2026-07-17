<?php
use yii\db\Migration;

class m260516_000001_add_avatar_to_user extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'avatar', $this->string(255)->null());
    }

    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'avatar');
    }
}
