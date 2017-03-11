<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property integer $id
 * @property string $name
 * @property string $bio
 * @property string $photo
 *
 * @property ActorMovie[] $actorMovies
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'bio', 'photo'], 'string', 'max' => 255],
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
            'bio' => 'Bio',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActorMovies()
    {
        return $this->hasMany(ActorMovie::className(), ['actor_id' => 'id']);
    }



    public function fields()
    {
        $fields = parent::fields();
        $fields[] = "actorMovies";
        return $fields;
    }
}
