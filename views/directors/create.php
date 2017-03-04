<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Directors */

$this->title = 'Create Directors';
$this->params['breadcrumbs'][] = ['label' => 'Directors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
