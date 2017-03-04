<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Directors".
 *
 * @property integer $id
 * @property string $name
 *
 * @property MoviesDirectors[] $moviesDirectors
 * @property Movies[] $movies
 */
class Directors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Directors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMoviesDirectors()
    {
        return $this->hasMany(MoviesDirectors::className(), ['Directors_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasMany(Movies::className(), ['id' => 'Movies_id'])->viaTable('Movies_Directors', ['Directors_id' => 'id']);
    }
}
