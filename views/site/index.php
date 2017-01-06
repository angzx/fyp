<?php
use app\assets\AppAsset;
/* @var $this yii\web\View */

$this->title = 'UTAR LKC FES Staff Club Management System';
AppAsset::register($this);
?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
           <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>-->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php foreach($banner as $event_banner){ ?>
                <div class="item">
                    <?= "<img src='/FYP/web/uploads/event_banner/".$event_banner->banner."' alt='event' width='460' height='345'/>"?>
                </div>
                <?php } ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="body-content">

            <div class="row">
                <a href="index.php?r=site/about">
                    <div id="menu"  class="col-md-4 menu1">
                        <img src="../images/about_us.png" alt="about us logo" />
                        <h2>About Us</h2>
                        <p>
                            UTAR LKC FES Staff Club was formed to improve the relationship between staff and entertainment purpose.<br/>Come and discover more!
                        </p>
                        <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
                    </div>
                </a>

                <a href="index.php?r=site/events">
                    <div id="menu"  class="col-md-4 menu2">
                        <img src="../images/events_logo.png" alt="event logo" />
                        <h2>Events</h2>
                        <p>UTAR LKC FES Staff Club usually will organize 3 to 4 events per year.Want to know what are the events? <br/>Check it out!</p>
                        <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>-->
                    </div>
                </a>

                <a href="index.php?r=site/bday">
                    <div id="menu"  class="col-md-4">
                        <img src="../images/birthday_logo.png" alt="bday logo" />
                        <br/>
                        <h2>Birthday Staff</h2>
                        <p>Birthday is a big day for everyone! Check out who are having their birthday today. Celebrate with them!</p>
                        <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>-->
                    </div>
                </a>
        <!--<h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    -->
            </div>
        </div>


