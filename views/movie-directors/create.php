<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MovieDirectors */

$this->title = 'Create Movie Directors';
$this->params['breadcrumbs'][] = ['label' => 'Movie Directors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-directors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
