<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Taskassignments $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="taskassignment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'AssignmentID') ?>

    <?= $form->field($model, 'taskID') ?>

    <?= $form->field($model, 'workerID') ?>

    <?= $form->field($model, 'equipmentID') ?>

    <?= $form->field($model, 'dateAssigned') ?>

    <?php // echo $form->field($model, 'dateCompleted') ?>

    <?php // echo $form->field($model, 'Notes') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
