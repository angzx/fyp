<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "staff".
 *
 * @property integer $id
 * @property string $name
 * @property string $staff_id
 * @property string $bday
 * @property string $department
 * @property string $image
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'staff_id', 'bday', 'department'], 'required'],
            [['bday'], 'safe'],
            [['name', 'department', 'image'], 'string', 'max' => 255],
            [['staff_id'], 'string', 'max' => 10],
            [['file'],'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'staff_id' => 'Staff ID',
            'bday' => 'Birthday',
            'department' => 'Department',
            'image' => 'Image',
            'file' => 'Photo',
        ];
    }

    public function getEventregistrations()
    {
        return $this->hasMany(Eventregistration::className(), ['staff_id' => 'id']);
    }

    public function getEvent()
    {
        return $this->hasMany(Event::className(), ['event_id' => 'event_id'])->via('eventregistrations');
    }

    
}
