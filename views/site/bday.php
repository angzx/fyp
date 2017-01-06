<?php
/**
 * Created by PhpStorm.
 * User: coolm
 * Date: 6/24/2016
 * Time: 1:06 AM
 */

use yii\helpers\Html;
use yii\db\Expression;
use app\assets\AppAsset;


$this->title = 'Birthday Staff';
$this->params['breadcrumbs'][] = $this->title;
AppAsset::register($this);

?>
<div id="bdayWrapper">
    <h1> Birthday Staff of the Day!</h1>
    <h3>Today</h3>
    <div class="row" id="currentBdayStaff">
        <?php foreach($todayBday as $staff) { ?>
            <div id="bdayInfo" class="col-md-1">
                <div id="pic" class="img-responsive"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
            </div>
            <div id="bdayInfo" class="col-md-3">
                <div id="staffName" class="row"><?=$staff->name?></div>
                <div id="staffDept" class="row"><?=$staff->department?></div>
                <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
            </div>
        <?php } ?>
    </div>
    <br/>
    <br/>
    <h3>Upcoming Birthday</h3>
    <div id="overallBday">
        <div class="row" id="january">
        <?php foreach($janBday as $staff) { ?>
            <div id="bdayInfo" class="col-md-1">
                <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
            </div>
            <div id="bdayInfo" class="col-md-3">
                <div id="staffName" class="row"><?=$staff->name?></div>
                <div id="staffDept" class="row"><?=$staff->department?></div>
                <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
            </div>
        <?php } ?>
        </div>

        <div class="row" id="february">
            <?php foreach($febBday as $staff) { ?>
                <div id="bdayInfo" class="col-md-1">
                    <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
                </div>
                <div id="bdayInfo" class="col-md-3">
                    <div id="staffName" class="row"><?=$staff->name?></div>
                    <div id="staffDept" class="row"><?=$staff->department?></div>
                    <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
                </div>
            <?php } ?>
        </div>

        <div class="row" id="march">
            <?php foreach($macBday as $staff) { ?>
                <div id="bdayInfo" class="col-md-1">
                    <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
                </div>
                <div id="bdayInfo" class="col-md-3">
                    <div id="staffName" class="row"><?=$staff->name?></div>
                    <div id="staffDept" class="row"><?=$staff->department?></div>
                    <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
                </div>
            <?php } ?>
        </div>

        <div class="row" id="april">
            <?php foreach($aprBday as $staff) { ?>
                <div id="bdayInfo" class="col-md-1">
                    <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
                </div>
                <div id="bdayInfo" class="col-md-3">
                    <div id="staffName" class="row"><?=$staff->name?></div>
                    <div id="staffDept" class="row"><?=$staff->department?></div>
                    <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
                </div>
            <?php } ?>
        </div>

        <div class="row" id="may">
            <?php foreach($mayBday as $staff) { ?>
                <div id="bdayInfo" class="col-md-1">
                    <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
                </div>
                <div id="bdayInfo" class="col-md-3">
                    <div id="staffName" class="row"><?=$staff->name?></div>
                    <div id="staffDept" class="row"><?=$staff->department?></div>
                    <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
                </div>
            <?php } ?>
        </div>

        <div class="row" id="june">
            <?php foreach($junBday as $staff) { ?>
                <div id="bdayInfo" class="col-md-1">
                    <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
                </div>
                <div id="bdayInfo" class="col-md-3">
                    <div id="staffName" class="row"><?=$staff->name?></div>
                    <div id="staffDept" class="row"><?=$staff->department?></div>
                    <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
                </div>
            <?php } ?>
        </div>

        <div class="row" id="july">
            <?php foreach($julBday as $staff) { ?>
                <div id="bdayInfo" class="col-md-1">
                    <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
                </div>
                <div id="bdayInfo" class="col-md-3">
                    <div id="staffName" class="row"><?=$staff->name?></div>
                    <div id="staffDept" class="row"><?=$staff->department?></div>
                    <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
                </div>
            <?php } ?>
        </div>

        <div class="row" id="august">
            <?php foreach($augBday as $staff) { ?>
                <div id="bdayInfo" class="col-md-1">
                    <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
                </div>
                <div id="bdayInfo" class="col-md-3">
                    <div id="staffName" class="row"><?=$staff->name?></div>
                    <div id="staffDept" class="row"><?=$staff->department?></div>
                    <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
                </div>
            <?php } ?>
        </div>

        <div class="row" id="september">
            <?php foreach($sepBday as $staff) { ?>
                <div id="bdayInfo" class="col-md-1">
                    <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
                </div>
                <div id="bdayInfo" class="col-md-3">
                    <div id="staffName" class="row"><?=$staff->name?></div>
                    <div id="staffDept" class="row"><?=$staff->department?></div>
                    <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
                </div>
            <?php } ?>
        </div>

        <div class="row" id="october">
            <?php foreach($octBday as $staff) { ?>
                <div id="bdayInfo" class="col-md-1">
                    <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
                </div>
                <div id="bdayInfo" class="col-md-3">
                    <div id="staffName" class="row"><?=$staff->name?></div>
                    <div id="staffDept" class="row"><?=$staff->department?></div>
                    <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
                </div>
            <?php } ?>
        </div>

        <div class="row" id="november">
            <?php foreach($novBday as $staff) { ?>
                <div id="bdayInfo" class="col-md-1">
                    <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
                </div>
                <div id="bdayInfo" class="col-md-3">
                    <div id="staffName" class="row"><?=$staff->name?></div>
                    <div id="staffDept" class="row"><?=$staff->department?></div>
                    <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
                </div>
            <?php } ?>
        </div>

        <div class="row" id="december">
            <?php foreach($decBday as $staff) { ?>
                <div id="bdayInfo" class="col-md-1">
                    <div id="pic"><?="<img src='/FYP/web/uploads/".$staff->image."' alt='photos' />"?></div>
                </div>
                <div id="bdayInfo" class="col-md-3">
                    <div id="staffName" class="row"><?=$staff->name?></div>
                    <div id="staffDept" class="row"><?=$staff->department?></div>
                    <div id="staffBday" class="row"><?=Yii::$app->formatter->asDate($staff->bday,$format = 'php: M d')?></div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div id="monthMenu" class = "btn-group">
        <button type="button" id="Jan" class="btn btn-primary">January</button>
        <button type="button" id="Feb" class="btn btn-primary">February</button>
        <button type="button" id="Mac" class="btn btn-primary">March</button>
        <button type="button" id="Apr" class="btn btn-primary">April</button>
        <button type="button" id="May" class="btn btn-primary">May</button>
        <button type="button" id="Jun" class="btn btn-primary">June</button>
        <button type="button" id="Jul" class="btn btn-primary">July</button>
        <button type="button" id="Aug" class="btn btn-primary">August</button>
        <button type="button" id="Sep" class="btn btn-primary">September</button>
        <button type="button" id="Oct" class="btn btn-primary">October</button>
        <button type="button" id="Nov" class="btn btn-primary">November</button>
        <button type="button" id="Dec" class="btn btn-primary">December</button>
    </div>
</div>
