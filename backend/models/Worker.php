<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "worker".
 *
 * @property int $Workerid
 * @property int|null $applicantID
 * @property string $department
 * @property float|null $salary
 *
 * @property Applicant $applicant
 * @property Report[] $reports
 * @property Taskassignment[] $taskassignments
 */
class Worker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['applicantID'], 'integer'],
            //[['department'], 'required'],
            [['salary'], 'number'],
            [['department'], 'string', 'max' => 225],
            [['applicantID'], 'exist', 'skipOnError' => true, 'targetClass' => Applicant::class, 'targetAttribute' => ['applicantID' => 'ApplicantID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Workerid' => Yii::t('app', 'Workerid'),
            'applicantID' => Yii::t('app', 'Applicant ID'),
            'department' => Yii::t('app', 'Department'),
            'salary' => Yii::t('app', 'Salary'),
        ];
    }

    /**
     * Gets query for [[Applicant]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApplicant()
    {
        return $this->hasOne(Applicant::class, ['ApplicantID' => 'applicantID'])->inverseOf('workers');
    }

    /**
     * Gets query for [[Reports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::class, ['workerID' => 'Workerid'])->inverseOf('worker');
    }

    /**
     * Gets query for [[Taskassignments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTaskassignments()
    {
        return $this->hasMany(Taskassignment::class, ['workerID' => 'Workerid'])->inverseOf('worker');
    }
}
