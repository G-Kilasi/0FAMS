<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Taskassignment $model */

$this->title = Yii::t('app', 'Update Taskassignment: {name}', [
    'name' => $model->AssignmentID,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Taskassignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AssignmentID, 'url' => ['view', 'AssignmentID' => $model->AssignmentID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="taskassignment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
