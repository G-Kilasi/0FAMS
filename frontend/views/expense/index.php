<?php

use frontend\models\Expense;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\Expenses $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Expenses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'ExpenseID',
            //'taskID',
            //'equipmentID',
            [
                'attribute' => 'equipment.name',
                'label' => 'Equipment',
            ],
        
            [
                'attribute' => 'equipment.cost',
                'format' => 'decimal',
            ],
            [
                'attribute' => 'amount',
                'label' => 'amount used',
            ],
           // 'amount',
            'description:ntext',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Expense $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ExpenseID' => $model->ExpenseID]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
