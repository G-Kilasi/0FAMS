<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "applicant".
 *
 * @property int $ApplicantID
 * @property int|null $userID
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $skills
 * @property string|null $position
 * @property string|null $verified
 * @property string|null $accepted
 * @property string|null $availability
 *
 * @property User $user
 * @property Worker[] $workers
 */
class Applicant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'applicant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userID'], 'integer'],
            [['verified', 'accepted'], 'string'],
            [['name', 'email', 'availability'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 20],
            [['skills', 'position'], 'string', 'max' => 255],
            [['userID'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['userID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ApplicantID' => Yii::t('app', 'Applicant ID'),
            'userID' => Yii::t('app', 'User ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'skills' => Yii::t('app', 'Skills'),
            'position' => Yii::t('app', 'Position'),
            'verified' => Yii::t('app', 'Verified'),
            'accepted' => Yii::t('app', 'Accepted'),
            'availability' => Yii::t('app', 'Availability'),
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'userID'])->inverseOf('applicants');
    }

    /**
     * Gets query for [[Workers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(Worker::class, ['applicantID' => 'ApplicantID'])->inverseOf('applicant');
    }
}
