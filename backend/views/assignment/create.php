<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Taskassignment $model */

$this->title = Yii::t('app', 'Create Taskassignment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Taskassignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taskassignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
