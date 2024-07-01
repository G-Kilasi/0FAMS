<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\worker $model */
/** @var ActiveForm $form */
?>
<div class="site-worker">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'applicantID') ?>
        <?= $form->field($model, 'department') ?>
        <?= $form->field($model, 'salary') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-worker -->
