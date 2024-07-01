<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Worker $model */

$this->title = Yii::t('app', 'Create Worker');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Workers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
