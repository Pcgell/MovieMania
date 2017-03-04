<?php
/**
 * Created by PhpStorm.
 * User: classes
 * Date: 3/4/17
 * Time: 10:15 AM
 */

namespace app\controllers;


use yii\rest\ActiveController;

class V1MoviesController extends ActiveController
{
    public $modelClass = 'app\models\Movies';

}