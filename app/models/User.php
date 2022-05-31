<?php

namespace app\models;

use mdm\admin\models\User as UserModel;

class User extends UserModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['id'], 'int'],
            [['email'], 'string', 'max' => 255],
            [['username'], 'string', 'max' => 32],
            // [['fullname'], 'string', 'max' => 255, 'default' => 'Username'],
            [['authKey'], 'string', 'max' => 32],
            [['password_hash'], 'string', 'max' => 255],
            // [['status'], 'int'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'username' => 'Никнейм',
            'fullname' => 'Полное имя',
            'authKey' => 'Ключ',
            'password_hash' => 'Пароль',
            'status' => 'Статус'
        ];
    }
}
