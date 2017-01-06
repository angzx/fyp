<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'event_id') ?>

    <?= $form->field($model, 'event_name') ?>

    <?= $form->field($model, 'event_date_start') ?>

    <?= $form->field($model, 'event_date_end') ?>

    <?= $form->field($model, 'event_time_start') ?>

    <?php // echo $form->field($model, 'event_time_end') ?>

    <?php // echo $form->field($model, 'event_desc') ?>

    <?php // echo $form->field($model, 'banner') ?>

    <?php // echo $form->field($model, 'display') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
