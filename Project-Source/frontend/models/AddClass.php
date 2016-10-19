<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Class".
 *
 * @property integer $class_id
 * @property string $class_name
 * @property string $created_at
 * @property string $updated_at
 */
class AddClass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Class';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_name'], 'required'],
            ['class_name', 'unique', 'message' => 'This Class has already been taken.'],
            [['created_at', 'updated_at'], 'safe'],
            [['class_name'], 'string', 'max' => 255],
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
            'teacher_name' => 'Teacher Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
