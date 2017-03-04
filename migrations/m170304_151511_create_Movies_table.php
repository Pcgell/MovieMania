<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Movies`.
 */
class m170304_151511_create_Movies_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('Movies', [
            'id' => $this->primaryKey(),
            'Name'=>$this->string(),
            'Description'=> $this->string(),
            'imageUrl'=> $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('Movies');
    }
}
