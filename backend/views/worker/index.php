<?php

use backend\models\Worker;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\Workers $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Workers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Worker'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Workerid',
            'applicantID',
            'department',
            'salary',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Worker $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Workerid' => $model->Workerid]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
