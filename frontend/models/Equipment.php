<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "equipment".
 *
 * @property int $EquipmentID
 * @property string|null $name
 * @property float|null $cost
 * @property string|null $description
 * @property int|null $quantity
 *
 * @property Expense[] $expenses
 * @property Taskassignment[] $taskassignments
 */
class Equipment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'equipment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cost'], 'number'],
            [['description'], 'string'],
            [['quantity'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EquipmentID' => Yii::t('app', 'Equipment ID'),
            'name' => Yii::t('app', 'Name'),
            'cost' => Yii::t('app', 'Cost'),
            'description' => Yii::t('app', 'Description'),
            'quantity' => Yii::t('app', 'Quantity'),
        ];
    }

    /**
     * Gets query for [[Expenses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExpenses()
    {
        return $this->hasMany(Expense::class, ['equipmentID' => 'EquipmentID'])->inverseOf('equipment');
    }

    /**
     * Gets query for [[Taskassignments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTaskassignments()
    {
        return $this->hasMany(Taskassignment::class, ['equipmentID' => 'EquipmentID'])->inverseOf('equipment');
    }
}
