<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MovieDirectors */

$this->title = $model->Movies_id;
$this->params['breadcrumbs'][] = ['label' => 'Movie Directors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-directors-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Movies_id' => $model->Movies_id, 'Directors_id' => $model->Directors_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Movies_id' => $model->Movies_id, 'Directors_id' => $model->Directors_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Movies_id',
            'Directors_id',
        ],
    ]) ?>

</div>
