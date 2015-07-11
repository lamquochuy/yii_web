<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "visitors".
 *
 * @property integer $id
 * @property string $fullname
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $birthday
 * @property string $phone_number
 * @property integer $gender
 * @property string $picture
 * @property string $token
 * @property string $register_date
 * @property string $access_ip
 * @property integer $login_fail_count
 * @property string $block_time
 * @property string $last_visit_date
 * @property string $created_time
 * @property integer $status
 */
class Visitors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visitors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullname', 'username','birthday', 'password', 'email', 'gender', 'status'], 'required'],
            [['birthday', 'register_date', 'last_visit_date', 'created_time'], 'safe'],
            [['gender', 'login_fail_count', 'status'], 'integer'],
            [['fullname', 'picture', 'token'], 'string', 'max' => 255],
            [['username', 'password', 'email'], 'string', 'max' => 100],
            [['phone_number', 'access_ip', 'block_time'], 'string', 'max' => 50],
            ['email', 'email'],
            ['username','unique'],
            ['email','unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'birthday' => 'Birthday',
            'phone_number' => 'Phone Number',
            'gender' => 'Gender',
            'picture' => 'Picture',
            'token' => 'Token',
            'register_date' => 'Register Date',
            'access_ip' => 'Access Ip',
            'login_fail_count' => 'Login Fail Count',
            'block_time' => 'Block Time',
            'last_visit_date' => 'Last Visit Date',
            'created_time' => 'Created Time',
            'status' => 'Status',
        ];
    }
}
