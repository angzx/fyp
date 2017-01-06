<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\SendForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Send Greetings!';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <?php if (Yii::$app->session->hasFlash('sendFormSubmitted')): ?>
        <div class="alert alert-success">
            Birthday card sent!
        </div>
    <?php else: ?>
    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'send-card-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'subject') ?>

            <?= $form->field($model, 'body')->textarea(['rows' => 10])?>

            <?= $form->field($model, 'card')->hiddenInput()->label(false) ?>

            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Send', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                <?= Html::a( 'Back', Yii::$app->request->referrer,['class' => 'btn btn-success']); ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
    <?php endif; ?>

    <div id="preview" class="container">
        <h2>Preview of selected card</h2>
        <?= "<img id='attachment' src='uploads/birthday_card/".$model->card ."' alt='card'/>"?>
    </div>
</div>
