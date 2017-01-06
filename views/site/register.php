<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Staff;
use app\models\Event;



$this->title = 'Event Registration';

?>
<h1>Join us in the events!</h1>
<div class="event-register-form">
    <?php if (Yii::$app->session->hasFlash('registerFormSubmitted')): ?>
        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>
        <a href="index.php?r=site/events"><button class="btn btn-success">Back to Event Page</button></a>
    <?php else: ?>
     <?php $form = ActiveForm::begin();?>
    <?= $form->field($model, 'staff_id')->dropDownList(
        ArrayHelper::map(Staff::find()->all(),'id','name'), ['prompt' => 'Select your name']
    )?>
    <?= $form -> field($model,'event_id')->dropDownList(
        ArrayHelper::map(Event::find()->all(),'event_id','event_name'), ['prompt' => 'Select the event you want to register']
    )?>
    <div class="form-group">
        <?= Html::submitButton('Register', ['class' => 'btn btn-success']) ?>
        <?= Html::a( 'Back', Yii::$app->request->referrer,['class' => 'btn btn-success']); ?>
    </div>
    <?php ActiveForm::end(); ?>
    <?php endif; ?>
</div>
