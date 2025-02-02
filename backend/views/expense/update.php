<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Expense $model */

$this->title = Yii::t('app', 'Update Expense: {name}', [
    'name' => $model->ExpenseID,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Expenses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ExpenseID, 'url' => ['view', 'ExpenseID' => $model->ExpenseID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="expense-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
