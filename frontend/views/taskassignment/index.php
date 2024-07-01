<?php

use frontend\models\Taskassignment;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\Taskassignments $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'All Task Assignments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taskassignment-index">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'AssignmentID',
           // 'taskID',
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
                'attribute' => 'task.deadline'
            ],
            [
                'attribute' => 'task.status'
            ],
            [
                'attribute' => 'equipment.name',
                'label' => 'Equipment',
            ],
            //'equipmentID',
            //'dateCompleted',
            //'Notes:ntext',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Taskassignment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'AssignmentID' => $model->AssignmentID]);
                 },
                 'template' => '{view}',
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
