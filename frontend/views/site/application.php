<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Applicant $model */
/** @var ActiveForm $form */
?>
<div class="site-application">

    <?php $form = ActiveForm::begin(); ?>

        <!-- < ?= $form->field($model, 'userID') ?> -->
        <!-- < ?= $form->field($model, 'verified') ?> -->
        <!-- < ?= $form->field($model, 'accepted') ?> -->
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'availability') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'skills') ?>
        <?= $form->field($model, 'position') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary'] ) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-application -->


