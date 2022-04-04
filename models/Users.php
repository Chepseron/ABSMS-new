<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string|null $auth_key
 * @property string $name
 * @property string|null $phone
 * @property string|null $password_hash
 * @property string|null $password_reset_token
 * @property int|null $client_id
 * @property string|null $role_id
 * @property string $email
 * @property string|null $email_verified_at
 * @property string|null $phone_verified_at
 * @property string $timezone
 * @property string|null $code
 * @property int|null $requires_2fa
 * @property string|null $remember_token
 * @property string|null $verification_token
 * @property string $status
 * @property string|null $created_at
 * @property int $receive_summary_reports
 * @property int $receive_monthly_reports
 * @property string|null $updated_at
 * @property string|null $deleted_at
 * @property string $roleDetails
 * @property int|null $departmentID
 *
 * @property Departments $department
 * @property Departments[] $departments
 * @property Departments[] $departments0
 * @property Surveys[] $surveys
 * @property Surveys[] $surveys0
 * @property TbModules[] $tbModules
 * @property TbModules[] $tbModules0
 * @property TbPermissions[] $tbPermissions
 * @property TbPermissions[] $tbPermissions0
 * @property TbRoles[] $tbRoles
 * @property TbRoles[] $tbRoles0
 * @property TbUsergroups[] $tbUsergroups
 * @property TbUsergroups[] $tbUsergroups0
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'name', 'email', 'roleDetails'], 'required'],
            [['client_id', 'requires_2fa', 'receive_summary_reports', 'receive_monthly_reports', 'departmentID'], 'integer'],
            [['email_verified_at', 'phone_verified_at', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['username', 'auth_key', 'name', 'password_hash', 'password_reset_token', 'email', 'timezone', 'status'], 'string', 'max' => 255],
            [['phone', 'role_id'], 'string', 'max' => 200],
            [['code'], 'string', 'max' => 10],
            [['remember_token', 'verification_token'], 'string', 'max' => 100],
            [['roleDetails'], 'string', 'max' => 45],
            [['email'], 'unique'],
            [['username'], 'unique'],
            [['departmentID'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::className(), 'targetAttribute' => ['departmentID' => 'iddepartments']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'name' => 'Name',
            'phone' => 'Phone',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'client_id' => 'Client ID',
            'role_id' => 'Role ID',
            'email' => 'Email',
            'email_verified_at' => 'Email Verified At',
            'phone_verified_at' => 'Phone Verified At',
            'timezone' => 'Timezone',
            'code' => 'Code',
            'requires_2fa' => 'Requires 2fa',
            'remember_token' => 'Remember Token',
            'verification_token' => 'Verification Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'receive_summary_reports' => 'Receive Summary Reports',
            'receive_monthly_reports' => 'Receive Monthly Reports',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'roleDetails' => 'Role Details',
            'departmentID' => 'Department ID',
        ];
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Departments::className(), ['iddepartments' => 'departmentID']);
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Departments::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[Departments0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments0()
    {
        return $this->hasMany(Departments::className(), ['updatedBy' => 'id']);
    }

    /**
     * Gets query for [[Surveys]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurveys()
    {
        return $this->hasMany(Surveys::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[Surveys0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurveys0()
    {
        return $this->hasMany(Surveys::className(), ['updatedBy' => 'id']);
    }

    /**
     * Gets query for [[TbModules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbModules()
    {
        return $this->hasMany(TbModules::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[TbModules0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbModules0()
    {
        return $this->hasMany(TbModules::className(), ['modifiedBy' => 'id']);
    }

    /**
     * Gets query for [[TbPermissions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbPermissions()
    {
        return $this->hasMany(TbPermissions::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[TbPermissions0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbPermissions0()
    {
        return $this->hasMany(TbPermissions::className(), ['updatedBy' => 'id']);
    }

    /**
     * Gets query for [[TbRoles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbRoles()
    {
        return $this->hasMany(TbRoles::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[TbRoles0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbRoles0()
    {
        return $this->hasMany(TbRoles::className(), ['updatedBy' => 'id']);
    }

    /**
     * Gets query for [[TbUsergroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbUsergroups()
    {
        return $this->hasMany(TbUsergroups::className(), ['createdBy' => 'id']);
    }

    /**
     * Gets query for [[TbUsergroups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbUsergroups0()
    {
        return $this->hasMany(TbUsergroups::className(), ['updatedBy' => 'id']);
    }
}
