<?php

namespace app\controllers;

use app\models\Eventregistration;
use app\models\EventSearch;
use app\models\Greetingscards;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Staff;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Event;
use yii\helpers\ArrayHelper;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index',[
            'banner' => Event::find()->where(['display' => 1])->all(),
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('index.php?r=staff');
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
       

        return $this->render('contact', [
            'model' => $model,
        ]);


    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionBday()
    {
        $today = date('m-d');
        $jan = "01";
        $feb = "02";
        $mac = "03";
        $apr = "04";
        $may = "05";
        $jun = "06";
        $jul = "07";
        $aug = "08";
        $sep = "09";
        $oct = "10";
        $nov = "11";
        $dec = "12";
        return $this->render('bday', [
            'todayBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m-%d")' => $today])->all(),
            'upcomingBday' => Staff::find()->where(['>' , 'bday', $today])->all(),
            'janBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $jan])->all(),
            'febBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $feb])->all(),
            'macBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $mac])->all(),
            'aprBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $apr])->all(),
            'mayBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $may])->all(),
            'junBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $jun])->all(),
            'julBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $jul])->all(),
            'augBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $aug])->all(),
            'sepBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $sep])->all(),
            'octBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $oct])->all(),
            'novBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $nov])->all(),
            'decBday' => Staff::find()->where(['DATE_FORMAT(bday, "%m")' => $dec])->all()
        ]);
        
    }

    public function actionEvents()
    {
        $today = date('m-d');
        return $this->render('events',['upcomingEvent' => Event::find()->where(['>=' ,'DATE_FORMAT(event_date_start, "%m-%d")', $today])->orderBy('event_date_start')->all()]);
    }

    public function actionRegister(/*$staff_id, $event_id*/) {
        // Get $staffID and $eventID from POST data
        $model = new Eventregistration();
        /*$staff = Staff::findOne($staff_id);
        $event = Events::findOne($event_id);

        $staff->link('events', $event);*/

        if ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('registerFormSubmitted');
            return $this->refresh();
        }else{
            return $this->render('register',['model' => $model]);
        }

    }


}
