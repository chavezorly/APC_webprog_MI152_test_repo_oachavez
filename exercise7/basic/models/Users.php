<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $lastName
 * @property string $firstName
 * @property string $middleName
 * @property string $email
 * @property string $gender
 * @property string $nickname
 * @property string $homeAddress
 * @property string $cellphoneNo
 * @property string $comment
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lastName', 'firstName', 'middleName', 'email', 'gender', 'nickname', 'cellphoneNo'], 'required'],
            [['cellphoneNo'], 'integer'],
            [['lastName', 'firstName', 'middleName', 'email', 'gender', 'nickname', 'homeAddress'], 'string', 'max' => 45],
            [['comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'lastName' => 'Last Name',
            'firstName' => 'First Name',
            'middleName' => 'Middle Name',
            'email' => 'Email',
            'gender' => 'Gender',
            'nickname' => 'Nickname',
            'homeAddress' => 'Home Address',
            'cellphoneNo' => 'Cellphone No',
            'comment' => 'Comment',
        ];
    }
}
