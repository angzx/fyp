<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div id="article">
        <article>
            <img id="staffLogo" src="../images/logo.png" alt="logo"/>
            <h2>Staff Club Objectives</h2>
            LKC FES Staff Club was formed in June 2015 to cater for social and recreational needs of the staff community within the faculty.
            We were formed with with three objectives which are:
            <ul>
                <li>promote better, lively working environment and atmosphere,</li>
                <li>encourage communication and interaction among LKC FES staff</li>
                <li>promote LKC FES Spirit and unity, then increase LKC FES staff motivation.</li>
            </ul>
        </article>
    </div>

    <div id="chart">
        <h2>Organization Chart</h2>
        <article>
            This club was formed with 11 person from different departments of UTAR LKC FES as below:
            <ul>
                <li>Department of Mathematical and Actuarial Sciences: Dr Chen Huey Voon [The Chair person]</li>
                <li>Department of Civil Engineering: Ms Lau See Hung</li>
                <li>Department of Architecture & Sustainable Design: Mr Leong Hung Sek</li>
                <li>Department of Mechanical and Material Engineering: Dr Bernard Saw Lip Huat</li>
                <li>Department of Internet Engineering and Computer Science: Ms Beh Hooi Ching</li>
                <li>Department of Electrical and Electronic Engineering: Mr Chua Kein Huat</li>
                <li>Department of Surveying: Ms Lay Pei Sin</li>
                <li>Department of Chemical Engineering: Dr Shuit Siew Hoong</li>
                <li>Department of Mechatronics and BioMedical Engineering:</li>
                <li>Department of Laboratory Management and Safety Administration: Mr Fong Yong Sheng</li>
                <li>Faculty office: Ms Noradila</li>
            </ul>
        </article>
    </div>

    <div id="gallery">
        <h2>Event Galleries</h2>

        <?php $items = [
            [
                'url' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_b.jpg',
                'src' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_s.jpg',
                'options' => array('title' => 'Camposanto monumentale (inside)')
            ],
            [
                'url' => 'http://farm3.static.flickr.com/2863/9479121747_0b37c63fe7_b.jpg',
                'src' => 'http://farm3.static.flickr.com/2863/9479121747_0b37c63fe7_s.jpg',
                'options' => array('title' => 'Hafsten - Sunset')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_b.jpg',
                'src' => 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3749/9480072539_e3a1d70d39_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3749/9480072539_e3a1d70d39_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm8.static.flickr.com/7352/9477439317_901d75114a_b.jpg',
                'src' => 'http://farm8.static.flickr.com/7352/9477439317_901d75114a_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3802/9478895708_ccb710cfd1_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3802/9478895708_ccb710cfd1_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
        ];?>
        <?= dosamigos\gallery\Gallery::widget(['items' => $items]);?>
    </div>
    
    <!--<div id = "history">
        <p>
            This is the About page. You may modify the following file to customize its content:
        </p>
    </div>

    <div id = "organization">
        <p>
            This is the About page. You may modify the following file to customize its content:
        </p>
    </div>

    <div id = "benefit">
        <p>
            This is the About page. You may modify the following file to customize its content:
        </p>
    </div>


    <code><?/*= __FILE__ */?></code>-->
</div>
