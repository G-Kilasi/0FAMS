<?php

namespace backend\controllers;

use backend\models\Applicant;
use backend\models\Applicants;
use backend\models\Worker;
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
    public function actionCreate()
    {
        $model = new Applicant();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ApplicantID' => $model->ApplicantID]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
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

     public function actionUpdate($ApplicantID){
     $model = $this->findModel($ApplicantID);

    if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
        if ($model->verified == 'Verified' && $model->accepted == 'Accepted') {
            $worker = new Worker();
            // Corrected assignment of Applicant ID
            $worker->applicantID = $model->ApplicantID;
            $worker->department = 'Not set';
            if (/*$worker->load($this->request->post()) && */ $worker->save()) {
               // Corrected redirect parameters
                return $this->redirect(['view', 'ApplicantID' => $model->ApplicantID]);
            }
        }
    }

    return $this->render('update', [
        'model' => $model,
    ]);
}

//    public function actionUpdate($ApplicantID)
//      {
//         $model = $this->findModel($ApplicantID);

//          if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
//             if($model->verified == 'Verified' && $model->accepted == 'Accepted') {
//                 $worker = new Worker();
//                 $worker->applicantID = $model->ApplicantID;
//             if($worker->load($this->request->post()) && $worker->save()){
//                 return $this->redirect(['view','ApplicantID'=> $model->ApplicantID]);
//                }
//            }
//             //return $this->redirect(['view', 'ApplicantID' => $model->ApplicantID]);
//         }

//         return $this->render('update', [
//             'model' => $model,
//         ]);
//     }

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