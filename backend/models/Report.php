<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property int $ReportID
 * @property int|null $workerID
 * @property string|null $date
 * @property string|null $content
 * @property int|null $expenseID
 *
 * @property Expense $expense
 * @property Worker $worker
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ReportID'], 'required'],
            [['ReportID', 'workerID', 'expenseID'], 'integer'],
            [['date'], 'safe'],
            [['content'], 'string'],
            [['ReportID'], 'unique'],
            [['expenseID'], 'exist', 'skipOnError' => true, 'targetClass' => Expense::class, 'targetAttribute' => ['expenseID' => 'ExpenseID']],
            [['workerID'], 'exist', 'skipOnError' => true, 'targetClass' => Worker::class, 'targetAttribute' => ['workerID' => 'Workerid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ReportID' => Yii::t('app', 'Report ID'),
            'workerID' => Yii::t('app', 'Worker ID'),
            'date' => Yii::t('app', 'Date'),
            'content' => Yii::t('app', 'Content'),
            'expenseID' => Yii::t('app', 'Expense ID'),
        ];
    }

    /**
     * Gets query for [[Expense]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExpense()
    {
        return $this->hasOne(Expense::class, ['ExpenseID' => 'expenseID'])->inverseOf('reports');
    }

    /**
     * Gets query for [[Worker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(Worker::class, ['Workerid' => 'workerID'])->inverseOf('reports');
    }
}
