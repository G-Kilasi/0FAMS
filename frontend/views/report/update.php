<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Report $model */

$this->title = Yii::t('app', 'Update Report: {name}', [
    'name' => $model->ReportID,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ReportID, 'url' => ['view', 'ReportID' => $model->ReportID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="report-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
