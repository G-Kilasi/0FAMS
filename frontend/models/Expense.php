<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "expense".
 *
 * @property int $ExpenseID
 * @property int|null $taskID
 * @property int|null $equipmentID
 * @property float|null $amount
 * @property string|null $description
 *
 * @property Equipment $equipment
 * @property Report[] $reports
 * @property Task $task
 */
class Expense extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'expense';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ExpenseID'], 'required'],
            [['ExpenseID', 'taskID', 'equipmentID'], 'integer'],
            [['amount'], 'number'],
            [['description'], 'string'],
            [['ExpenseID'], 'unique'],
            [['equipmentID'], 'exist', 'skipOnError' => true, 'targetClass' => Equipment::class, 'targetAttribute' => ['equipmentID' => 'EquipmentID']],
            [['taskID'], 'exist', 'skipOnError' => true, 'targetClass' => Task::class, 'targetAttribute' => ['taskID' => 'TaskID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ExpenseID' => Yii::t('app', 'Expense ID'),
            'taskID' => Yii::t('app', 'Task ID'),
            'equipmentID' => Yii::t('app', 'Equipment ID'),
            'amount' => Yii::t('app', 'Amount'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * Gets query for [[Equipment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEquipment()
    {
        return $this->hasOne(Equipment::class, ['EquipmentID' => 'equipmentID'])->inverseOf('expenses');
    }

    /**
     * Gets query for [[Reports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::class, ['expenseID' => 'ExpenseID'])->inverseOf('expense');
    }

    /**
     * Gets query for [[Task]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Task::class, ['TaskID' => 'taskID'])->inverseOf('expenses');
    }
}
