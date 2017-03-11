<?php

use yii\db\Migration;

/**
 * Handles the creation of table `actor`.
 */
class m170311_142357_create_actor_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('actor', [
            'id' => $this->primaryKey(),
	        'name'=> $this->string(),
	        'bio'=> $this->string(),
	        'photo'=>$this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('actor');
    }
}
