<?php

use yii\db\Migration;

/**
 * Handles the creation of table `actor_movie`.
 * Has foreign keys to the tables:
 *
 * - `actor`
 * - `movie`
 */
class m170311_144426_create_junction_actor_and_movie_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('actor_movie', [
            'id'=> $this->primaryKey(),
            'actor_id' => $this->integer(),
            'movie_id' => $this->integer(),
            'role'=> $this->string(),
        ]);

        // creates index for column `actor_id`
        $this->createIndex(
            'idx-actor_movie-actor_id',
            'actor_movie',
            'actor_id'
        );

        // add foreign key for table `actor`
        $this->addForeignKey(
            'fk-actor_movie-actor_id',
            'actor_movie',
            'actor_id',
            'actor',
            'id',
            'CASCADE'
        );

        // creates index for column `movie_id`
        $this->createIndex(
            'idx-actor_movie-movie_id',
            'actor_movie',
            'movie_id'
        );

        // add foreign key for table `movie`
        $this->addForeignKey(
            'fk-actor_movie-movie_id',
            'actor_movie',
            'movie_id',
            'movies',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `actor`
        $this->dropForeignKey(
            'fk-actor_movie-actor_id',
            'actor_movie'
        );

        // drops index for column `actor_id`
        $this->dropIndex(
            'idx-actor_movie-actor_id',
            'actor_movie'
        );

        // drops foreign key for table `movie`
        $this->dropForeignKey(
            'fk-actor_movie-movie_id',
            'actor_movie'
        );

        // drops index for column `movie_id`
        $this->dropIndex(
            'idx-actor_movie-movie_id',
            'actor_movie'
        );

        $this->dropTable('actor_movie');
    }
}
