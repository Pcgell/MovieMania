<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MovieDirectors */

$this->title = 'Update Movie Directors: ' . $model->Movies_id;
$this->params['breadcrumbs'][] = ['label' => 'Movie Directors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Movies_id, 'url' => ['view', 'Movies_id' => $model->Movies_id, 'Directors_id' => $model->Directors_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="movie-directors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
