<?php

use frontend\models\Applicant;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\Applicants $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Applicants');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ApplicantID',
            //'userID',
            'name',
            'email:email',
            'phone',
            'skills',
            //'position',
            'verified',
            'accepted',
            //'availability',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Applicant $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ApplicantID' => $model->ApplicantID]);
                 },
                 'template' => ''
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
