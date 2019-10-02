<?php

use yii\db\Migration;

/**
 * Class m191002_093616_create_table_news
 */
class m191002_093616_create_table_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id'    =>  $this->primaryKey(),
            'title'    =>  $this->string(255),
            'content'    =>  $this->text(),
            'status'    =>  $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191002_093616_create_table_news cannot be reverted.\n";

        return false;
    }
    // public function up()
    // {
    //     $this->createTable('news', [
    //         'id'    =>  $this->primaryKey(),
    //         'title'    =>  $this->string(255);
    //         'content'    =>  $this->text();
    //         'status'    =>  $this->integer();
    //     ]);
    // }
    /*
    // Use up()/down() to run migration code without a transaction.


    public function down()
    {
        echo "m191002_093616_create_table_news cannot be reverted.\n";

        return false;
    }
    */
}
