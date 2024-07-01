<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "taskassignment".
 *
 * @property int $AssignmentID
 * @property int|null $taskID
 * @property int|null $workerID
 * @property int|null $equipmentID
 * @property string|null $dateAssigned
 * @property string|null $dateCompleted
 * @property string|null $Notes
 *
 * @property Equipment $equipment
 * @property Task $task
 * @property Worker $worker
 */
class Taskassignment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'taskassignment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['AssignmentID'], 'required'],
            [['AssignmentID', 'taskID', 'workerID', 'equipmentID'], 'integer'],
            [['dateAssigned', 'dateCompleted'], 'safe'],
            [['Notes'], 'string'],
            [['AssignmentID'], 'unique'],
            [['equipmentID'], 'exist', 'skipOnError' => true, 'targetClass' => Equipment::class, 'targetAttribute' => ['equipmentID' => 'EquipmentID']],
            [['taskID'], 'exist', 'skipOnError' => true, 'targetClass' => Task::class, 'targetAttribute' => ['taskID' => 'TaskID']],
            [['workerID'], 'exist', 'skipOnError' => true, 'targetClass' => Worker::class, 'targetAttribute' => ['workerID' => 'Workerid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'AssignmentID' => Yii::t('app', 'Assignment ID'),
            'taskID' => Yii::t('app', 'Task ID'),
            'workerID' => Yii::t('app', 'Worker ID'),
            'equipmentID' => Yii::t('app', 'Equipment ID'),
            'dateAssigned' => Yii::t('app', 'Date Assigned'),
            'dateCompleted' => Yii::t('app', 'Date Completed'),
            'Notes' => Yii::t('app', 'Notes'),
        ];
    }

    /**
     * Gets query for [[Equipment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEquipment()
    {
        return $this->hasOne(Equipment::class, ['EquipmentID' => 'equipmentID'])->inverseOf('taskassignments');
    }

    /**
     * Gets query for [[Task]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Task::class, ['TaskID' => 'taskID'])->inverseOf('taskassignments');
    }

    /**
     * Gets query for [[Worker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(Worker::class, ['Workerid' => 'workerID'])->inverseOf('taskassignments');
    }
}
