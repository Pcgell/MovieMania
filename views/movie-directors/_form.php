<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovieDirectors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-directors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Movies_id')->textInput() ?>

    <?= $form->field($model, 'Directors_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
