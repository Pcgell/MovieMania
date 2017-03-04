<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Movies".
 *
 * @property integer $id
 * @property string $Name
 * @property string $Description
 * @property string $imageUrl
 *
 * @property MoviesDirectors[] $moviesDirectors
 * @property Directors[] $directors
 */
class Movies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Movies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Description', 'imageUrl'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'Description' => 'Description',
            'imageUrl' => 'Image Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMoviesDirectors()
    {
        return $this->hasMany(MoviesDirectors::className(), ['Movies_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirectors()
    {
        return $this->hasMany(Directors::className(), ['id' => 'Directors_id'])->viaTable('Movies_Directors', ['Movies_id' => 'id']);
    }

    public function fields()
    {
        $fields = parent::fields();
        $fields[] = 'directors';
        return $fields;
    }
}
