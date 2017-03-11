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
 * @property MovieDirectors[] $movieDirectors
 * @property Directors[] $directors
 * @Property ActorMovie[] $actorMovie
 * @property Actor[] $actor
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
    public function getMovieDirectors()
    {
        return $this->hasMany(MovieDirectors::className(), ['Movies_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirectors()
    {
        return $this->hasMany(Directors::className(), ['id' => 'Directors_id'])->viaTable('Movies_Directors', ['Movies_id' => 'id']);
    }

    public function  getActor(){

        $actorMovie = ActorMovie::find()->where(['Movie_id' => $this->id])->all();
        $actors = array();
        foreach ($actorMovie as $item){
            $actors[] = Actor::find()->where(['id'=>$item->actor_id])->one();
        }
        return $actors;
    }

    public function fields()
    {
        $array =  parent::fields();
        $array[] = "directors";
        $array[] = "actor";
        return $array;
    }
}
