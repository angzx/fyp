<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'event_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_date_start')->widget(DatePicker::className(),['dateFormat' => 'yyyy-MM-dd'])-> textInput() ?>

    <?= $form->field($model, 'event_date_end')->widget(DatePicker::className(),['dateFormat' => 'yyyy-MM-dd'])-> textInput() ?>

    <?= $form->field($model, 'event_time_start')->widget(TimePicker::className(),[]) ?>

    <?= $form->field($model, 'event_time_end')->widget(TimePicker::className(),[]) ?>

    <?= $form->field($model, 'event_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput()  ?>

    <?= $form->field($model, 'display')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
