<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $searchModel app\models\GreetingscardsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Greetingscards';
$this->params['breadcrumbs'][] = $this->title;
AppAsset::register($this);
?>
<div class="greetingscards-index">
    <h1>Send a Birthday Greeting!</h1>
    <h2>Birthday e-card</h2>
   <div class="container-fluid">
       <?= Html::beginForm('index.php?r=greetingscards/send', 'post', ['name' => 'cardList']) ?>
<!--        <form name="cardList" method="post" action="index.php?r=greetingscards/send">-->
            <div class="row">
                <?php foreach($bdayCard as $card) { ?>
                    <div id="bday_card" class="col-md-4">
                        <div class="row" id="card">
                            <?="<input type='radio' name='cards' id='".$card->card_name."'class='input-hidden' value='$card->card'/>"?>
                            <?="<label for='".$card->card_name."'>"."<img src='/FYP/web/uploads/birthday_card/".$card->card."' alt='photos' />"?>
                        </div>
                        <div class="row"><?= $card->card_name?></div>
                    </div>
                <?php } ?>
            </div>
            <?= Html::submitButton('Next', ['id' => 'submit', 'class' => 'btn btn-success']) ?>
<!--        </form>-->
       <?= Html::endForm() ?>
    </div>
    <br/>
    <?php $form = ActiveForm::begin(['id' => 'w4' ,'options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'file')->fileInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Upload', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
