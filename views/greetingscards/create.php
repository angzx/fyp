<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Greetingscards */

$this->title = 'Create Greetingscards';
$this->params['breadcrumbs'][] = ['label' => 'Greetingscards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="greetingscards-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
