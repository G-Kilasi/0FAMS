<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $TaskID
 * @property string|null $description
 * @property string|null $location
 * @property string|null $deadline
 * @property string|null $priority
 * @property string|null $status
 *
 * @property Expense[] $expenses
 * @property Taskassignment[] $taskassignments
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'priority', 'status'], 'string'],
            [['deadline'], 'safe'],
            [['location'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'TaskID' => Yii::t('app', 'Task ID'),
            'description' => Yii::t('app', 'Description'),
            'location' => Yii::t('app', 'Location'),
            'deadline' => Yii::t('app', 'Deadline'),
            'priority' => Yii::t('app', 'Priority'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[Expenses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExpenses()
    {
        return $this->hasMany(Expense::class, ['taskID' => 'TaskID'])->inverseOf('task');
    }

    /**
     * Gets query for [[Taskassignments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTaskassignments()
    {
        return $this->hasMany(Taskassignment::class, ['taskID' => 'TaskID'])->inverseOf('task');
    }
}
