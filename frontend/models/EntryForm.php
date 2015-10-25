<?php

namespace frontend\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
//            [['name', 'email'], 'required'],
//            ['email', 'email'],
             [['name'], 'required', 'on' => 'register'],
             [['email'], 'required', 'on' => 'login'],
             ['email', 'email'],
        ];
    }
//    public function scenarios()
//    {
//        return [
//            'login' => ['name'],
//            'register' => ['name', 'email'],
//        ];
//    }
    
     public function attributeLabels()
    {
//        return [
//            'name' => 'Your name',
//            'email' => 'Your email address',
//        ];
//        
         return [
        'name' => \Yii::t('app', 'Your name'),
        'email' => \Yii::t('app', 'Your email address'),
       
    ];
    }
}