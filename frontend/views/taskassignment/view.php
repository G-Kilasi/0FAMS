<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Taskassignment $model */

$this->title = $model->AssignmentID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Taskassignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="taskassignment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'AssignmentID' => $model->AssignmentID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'AssignmentID' => $model->AssignmentID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'AssignmentID',
            //'taskID',
            //'workerID',
            //'equipmentID',
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
            'dateAssigned',
            'dateCompleted',
            'Notes:ntext',
        ],
    ]) ?>

</div>
