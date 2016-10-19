<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marks".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $subject_id
 * @property integer $class_id 
 * @property integer $teacher_name
 * @property string $mark
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Student $student
 */
class Marks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        
		return [
            ['student_id', 'required', 'message' => 'Please select student.'],
			['subject_id', 'required', 'message' => 'Please select subject.'],
			['class_id', 'required', 'message' => 'Please select Class.'],
			['mark', 'required', 'message' => 'Please enter the mark.'],
            [['created_at', 'updated_at'], 'safe'],
         ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
			'subject_id' => 'Subject ID',
			'class_id' => 'Class ID',
			'teacher_name' => 'Teacher Name',
            'mark' => 'Mark',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
