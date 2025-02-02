<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Applicant $model */

$this->title = Yii::t('app', 'Create Applicant');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Applicants'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
