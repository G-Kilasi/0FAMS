<?php

namespace frontend\controllers;

use frontend\assets\AppAsset;
use frontend\models\Applicant;
use frontend\models\Applicants;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ApplicantController implements the CRUD actions for Applicant model.
 */
class ApplicantController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Applicant models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new Applicants();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Applicant model.
     * @param int $ApplicantID Applicant ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ApplicantID)
    {
        return $this->render('view', [
            'model' => $this->findModel($ApplicantID),
        ]);
    }

    /**
     * Creates a new Applicant model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionApply()
    {
        if(\yii::$app->user->isGuest){
            return $this->goHome();
        }
        $applicant = Applicant::findOne(['userID'=> \yii::$app->user->id]);
        if (!$applicant) {     
        $model = new Applicant();
        $model->userID = \Yii::$app->user->id;
        $model->verified = 'Pending';
        $model->accepted = 'Pending';
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ApplicantID' => $model->ApplicantID]);
            }
        } else {
            $model->loadDefaultValues();
        }
    }else{
        \Yii::$app->session->setFlash('success', 'Thank you for your Patience. Your application is on Review.');
        return $this->redirect(['view', 'ApplicantID' => $applicant->ApplicantID]);
    }
        return $this->render('apply', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Applicant model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ApplicantID Applicant ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ApplicantID)
    {
        $model = $this->findModel($ApplicantID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ApplicantID' => $model->ApplicantID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Applicant model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ApplicantID Applicant ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ApplicantID)
    {
        $this->findModel($ApplicantID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Applicant model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ApplicantID Applicant ID
     * @return Applicant the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ApplicantID)
    {
        if (($model = Applicant::findOne(['ApplicantID' => $ApplicantID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(\Yii::t('app', 'The requested page does not exist.'));
    }
}
