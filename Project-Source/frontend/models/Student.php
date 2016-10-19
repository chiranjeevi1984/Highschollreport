<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $student_name
 * @property string $student_regnum
 * @property string $father_name
 * @property string $email
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $pin_code
 * @property string $mobile_num
 * @property string $created_at
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_name', 'father_name', 'email', 'student_regnum', 'address', 'mobile_num', 'city', 'state', 'country', 'pin_code'], 'required'],
            ['student_name', 'unique', 'message' => 'This Studentname has already been taken.'],
	    ['student_name', 'string'],
            ['email', 'unique', 'message' => 'This Studentemail has already been taken.'],
	    ['email', 'email'],
            [['created_at'], 'safe'],
            [['student_name', 'father_name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_name' => 'Student Name',
			'student_regnum' => 'Student RegisterID',
            'father_name' => 'Father Name',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'country' => 'Country',
			'pin_code' => 'Pin Code',
			'mobile_num' => 'Mobile Num',
            'email' => 'Email',
            'created_at' => 'Created At',
        ];
    }
}
