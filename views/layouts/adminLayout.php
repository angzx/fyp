<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="wrap">
    <header>
        <img id="staffLogo" src="../images/logo.png" alt="logo"/>
        <div>
            <h1>Staff Club Management System</h1>
        </div>
        <img id="utarLogo" src="../images/UTAR logo.jpg"/>
    </header>
    <?php
    NavBar::begin([
        'options' => [
            'id'=> 'navi',
            'class' => 'navbar-inverse',
        ],
    ]);
    echo Nav::widget([
        'options' => [
            'id' => 'mainNav',
            'class' => 'navbar-nav'
        ],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Birthday Staff', 'url' => ['/site/bday']],
            ['label' => 'Events', 'url' => ['/site/events']],
            ['label' => 'About Staff Club', 'url' => ['/site/about']],
            ['label' => 'Contact Us', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li class="dropdown">'
                . '<a href="index.php?r=site/admin" data-toggle="dropdown" class="dropdown-toggle">'
                . Yii::$app->user->identity->username
                . '<span class="caret"></span>'
                . '</a>'
                . '<ul class="dropdown-menu">'
                /* . '<li><button class="btn btn-link"><a href="index.php?r=site/admin">Administrator Page</a></button></li>'*/
                . '<li>'
                . '<b><a class="btn btn-link" href="index.php?r=staff"> Administrator Page'
                . '</a></b>'
                . '</li>'
                . '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
                . '</ul>'
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="row">
        <div class="col-sm-3">
            <div class="sidebar-nav">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Sidebar menu</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php?r=staff">Create, Find & Edit Staff</a></li>
                            <li><a href="index.php?r=greetingscards">Send Birthday Greetings</a></li>
                            <li><a href="index.php?r=event">Event Management</a></li>
                            <!--<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>-->
                            <li><a href="index.php?r=admin">Administrator Settings</a></li>
                            <!--<li><a href="#">Reviews <span class="badge">1,118</span></a></li>-->
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <?= $content ?>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; UTAR LKC FES Staff Club <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
