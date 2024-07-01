<?php

use backend\models\Applicant;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\Applicants $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Applicants');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Applicant'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ApplicantID',
            'userID',
            'name',
            'email:email',
            'phone',
            //'skills',
            //'position',
            //'verified',
            //'accepted',
            //'availability',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Applicant $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ApplicantID' => $model->ApplicantID]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
