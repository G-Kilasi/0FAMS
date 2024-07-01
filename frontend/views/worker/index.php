<?php

use frontend\models\Worker;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\Workers $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Workers');
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

            'Workerid',
            'applicantID',
            'department',
            'salary',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Worker $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Workerid' => $model->Workerid]);
                 },
                 'template' => ''
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
