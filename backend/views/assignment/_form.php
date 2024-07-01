<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Taskassignment $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="taskassignment-form">

<?php $form = ActiveForm::begin(); ?>
    

    <?= $form->field($model, 'AssignmentID')->textInput() ?>

    <?= $form->field($model, 'taskID')->textInput() ?>

    <?= $form->field($model, 'workerID')->textInput() ?>

    <?= $form->field($model, 'equipmentID')->textInput() ?>

    <?= $form->field($model, 'dateAssigned')->textInput() ?>

    <?= $form->field($model, 'dateCompleted')->textInput() ?>

    <?= $form->field($model, 'Notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
