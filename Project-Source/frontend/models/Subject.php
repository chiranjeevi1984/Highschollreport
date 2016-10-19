<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $subject_id
 * @property string $subject_name
 * @property string $teacher_name
 * @property string $created_at
 * @property string $updated_at
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_name'], 'required'],
            ['subject_name', 'unique', 'message' => 'This Subjectname has already been taken.'],
            [['created_at', 'updated_at'], 'safe'],
            [['subject_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subject_id' => 'Subject ID',
            'subject_name' => 'Subject Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
