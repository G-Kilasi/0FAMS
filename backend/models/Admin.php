<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id
 * @property string $username
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string|null $verification_token
 * @property string $email
 * @property string|null $auth_key
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $password
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'email'], 'required'],
            [['status', 'created_at', 'updated_at', 'password'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'verification_token', 'auth_key'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'verification_token' => Yii::t('app', 'Verification Token'),
            'email' => Yii::t('app', 'Email'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'password' => Yii::t('app', 'Password'),
        ];
    }
}
