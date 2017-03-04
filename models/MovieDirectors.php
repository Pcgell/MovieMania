<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Movies_Directors".
 *
 * @property integer $Movies_id
 * @property integer $Directors_id
 *
 * @property Directors $directors
 * @property Movies $movies
 */
class MovieDirectors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Movies_Directors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Movies_id', 'Directors_id'], 'required'],
            [['Movies_id', 'Directors_id'], 'integer'],
            [['Directors_id'], 'exist', 'skipOnError' => true, 'targetClass' => Directors::className(), 'targetAttribute' => ['Directors_id' => 'id']],
            [['Movies_id'], 'exist', 'skipOnError' => true, 'targetClass' => Movies::className(), 'targetAttribute' => ['Movies_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Movies_id' => 'Movies ID',
            'Directors_id' => 'Directors ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirectors()
    {
        return $this->hasOne(Directors::className(), ['id' => 'Directors_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasOne(Movies::className(), ['id' => 'Movies_id']);
    }
}
