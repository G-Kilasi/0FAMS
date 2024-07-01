<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Task $model */

$this->title = Yii::t('app', 'Update Task: {name}', [
    'name' => $model->TaskID,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tasks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TaskID, 'url' => ['view', 'TaskID' => $model->TaskID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="task-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
