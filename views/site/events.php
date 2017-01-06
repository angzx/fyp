<?php
use yii\helpers\Html;
use app\assets\AppAsset;
/*use marekpetras\calendarview\CalendarView;*/

$this->title = 'Staff Club Events';
$this->params['breadcrumbs'][] = $this->title;

?>

<div id="eventWrapper">
    <h1>Staff Club Events</h1>
            <?php foreach($upcomingEvent as $comingEvents) { ?>
                <a href="index.php?r=site%2Fregister">
                <div id="event1" class="row">
                    <div id="date" class="col-md-2">
                        <div id="month" class="row"><?=Yii::$app->formatter->asDate($comingEvents->event_date_start,$format = 'php: M')?></div>
                        <div id="day" class="row"><?=Yii::$app->formatter->asDate($comingEvents->event_date_start,$format = 'php: d')?></div>
                        <div id="Days" class="row"><?=Yii::$app->formatter->asDate($comingEvents->event_date_start,$format = 'php: l')?></div>
                    </div>
                    <div id="eventColumn" class="col-md-10">
                        <div id="eventName" class="row">
                            <?=$comingEvents->event_name?>
                        </div>
                        <div id="dateStart" class="row">
                            <?="<b>Event Date:</b> ".$comingEvents->event_date_start." to ".$comingEvents->event_date_end ?>
                        </div>

                        <div id="timeStart" class="row">
                            <?="<b>Event Time:</b> ".$comingEvents->event_time_start." to ".$comingEvents->event_time_end ?>
                        </div>
                        <br/>
                        <div id="desc" class="row">
                            <?=$comingEvents->event_desc?>
                        </div>
                        <?php
                        /*foreach($comingEvents->staffs as $staff)
                                    echo $staff->name*/
                        ?>


                    </div>
                </div>
                </a>
                <br/>
            <?php } ?>
</div>
