<?php

namespace app\controllers;

use app\models\SendForm;
use Yii;
use app\models\Greetingscards;
use app\models\GreetingscardsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * GreetingscardsController implements the CRUD actions for Greetingscards model.
 */
class GreetingscardsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'send' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Greetingscards models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Greetingscards();
        $searchModel = new GreetingscardsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $this -> layout = "adminLayout";

        if ($model->load(Yii::$app->request->post())) {

            $model->file = UploadedFile::getInstance($model, 'file');
            $model->file->saveAs('uploads/birthday_card/' . $model->file->baseName . '.' . $model->file->extension);

            $model->card = $model->file->baseName . '.' . $model->file->extension;
            $model->card_name = $model->file->baseName;
            $model->save();

            return $this->redirect(['index']);
        }
        else {
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'bdayCard' => greetingscards::find()->all(),
                'model' => $model
            ]);
        }
    }



    /**
     * Displays a single Greetingscards model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Greetingscards model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Greetingscards();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Greetingscards model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Greetingscards model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionSend()
    {
        $model = new SendForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(
                Yii::$app->params['adminEmail'],
                Yii::$app->request->post()['SendForm']['card'])) {
            //Yii::$app->session->setFlash('sendFormSubmitted');
            return $this->redirect('index.php?r=greetingscards');
        }
        $model->card = Yii::$app->request->post()['cards'];
        return $this->render('send',[
            'model' => $model
        ]);
    }

    /**
     * Finds the Greetingscards model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Greetingscards the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Greetingscards::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


}
