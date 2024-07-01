<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Worker $model */

$this->title = $model->applicant->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Workers')];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'=> 'applicant.name',
                'label' => Yii::t('app','Full Name'),
            ],
            [
                'attribute'=> 'applicant.email',
                'label'=> Yii::t('app','Email Address'),
            ],
            [
                'attribute'=> 'applicant.phone',
                'label'=> Yii::t('app','Phone '),
            ],
            [
                'attribute'=> 'applicant.skills',
                'label'=> Yii::t('app','Skills'),
            ],
            [
                'attribute'=> 'applicant.Posistion',
                'label'=> Yii::t('app','Posistion'),
            ],
            [
                'attribute'=> 'applicant.verified',
                'label'=> Yii::t('app','Status'),
            ],
            [
                'attribute'=> 'applicant.availability',
                'label'=> Yii::t('app','Availability'),
            ],
            'department',
            'salary',
            
        ],
    ]) ?>

</div>
