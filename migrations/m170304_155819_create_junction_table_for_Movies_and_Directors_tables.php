<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Movies_Directors`.
 * Has foreign keys to the tables:
 *
 * - `Movies`
 * - `Directors`
 */
class m170304_155819_create_junction_table_for_Movies_and_Directors_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('Movies_Directors', [
            'Movies_id' => $this->integer(),
            'Directors_id' => $this->integer(),
            'PRIMARY KEY(Movies_id, Directors_id)',
        ]);

        // creates index for column `Movies_id`
        $this->createIndex(
            'idx-Movies_Directors-Movies_id',
            'Movies_Directors',
            'Movies_id'
        );

        // add foreign key for table `Movies`
        $this->addForeignKey(
            'fk-Movies_Directors-Movies_id',
            'Movies_Directors',
            'Movies_id',
            'Movies',
            'id',
            'CASCADE'
        );

        // creates index for column `Directors_id`
        $this->createIndex(
            'idx-Movies_Directors-Directors_id',
            'Movies_Directors',
            'Directors_id'
        );

        // add foreign key for table `Directors`
        $this->addForeignKey(
            'fk-Movies_Directors-Directors_id',
            'Movies_Directors',
            'Directors_id',
            'Directors',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `Movies`
        $this->dropForeignKey(
            'fk-Movies_Directors-Movies_id',
            'Movies_Directors'
        );

        // drops index for column `Movies_id`
        $this->dropIndex(
            'idx-Movies_Directors-Movies_id',
            'Movies_Directors'
        );

        // drops foreign key for table `Directors`
        $this->dropForeignKey(
            'fk-Movies_Directors-Directors_id',
            'Movies_Directors'
        );

        // drops index for column `Directors_id`
        $this->dropIndex(
            'idx-Movies_Directors-Directors_id',
            'Movies_Directors'
        );

        $this->dropTable('Movies_Directors');
    }
}
