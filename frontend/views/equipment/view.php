<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Equipment $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Equipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">

    <!-- <h1>< ?= Html::encode($this->title) ?></h1> -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'EquipmentID',
            'name',
            'cost',
            'description:ntext',
            'quantity',
        ],
    ]) ?>

</div>
