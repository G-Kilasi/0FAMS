<?php

use backend\models\Taskassignment;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\Taskassignments $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'All Taskassignments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Taskassignment'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'AssignmentID',
            //'taskID',
           // 'workerID',
           // 'equipmentID',
            //'dateAssigned',
            [
                'attribute' => 'worker.department'
            ],
           // 'workerID',
            [
                'attribute' => 'task.location'
            ],
            [
                'attribute' => 'task.priority'
            ],
            'dateAssigned',
            
            [
                'attribute' => 'task.deadline',
                'format' => 'date'
            ],
            [
                'attribute' => 'task.status'
            ],
            [
                'attribute' => 'equipment.name',
                'label' => 'Equipment',
            ],
            //'dateCompleted',
            //'Notes:ntext',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Taskassignment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'AssignmentID' => $model->AssignmentID]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
