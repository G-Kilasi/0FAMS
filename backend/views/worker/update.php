<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Worker $model */

$this->title = Yii::t('app', 'Update Worker: {name}', [
    'name' => $model->Workerid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Workers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Workerid, 'url' => ['view', 'Workerid' => $model->Workerid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="worker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
