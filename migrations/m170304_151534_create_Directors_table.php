<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Directors`.
 */
class m170304_151534_create_Directors_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('Directors', [
            'id' => $this->primaryKey(),
            'name'=> $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('Directors');
    }
}
