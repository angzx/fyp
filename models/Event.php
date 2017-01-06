<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $event_id
 * @property string $event_name
 * @property string $event_date_start
 * @property string $event_date_end
 * @property string $event_time_start
 * @property string $event_time_end
 * @property string $event_desc
 * @property string $banner
 * @property integer $display
 *
 * @property Eventregistration[] $eventregistrations
 * @property Staff[] $staff
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_name', 'event_date_start', 'event_date_end', 'event_time_start', 'event_time_end', 'event_desc', 'banner', 'display'], 'required'],
            [['event_date_start', 'event_date_end', 'event_time_start', 'event_time_end'], 'safe'],
            [['display'], 'integer'],
            [['event_name'], 'string', 'max' => 100],
            [['event_desc'], 'string', 'max' => 1000],
            [['banner'], 'string', 'max' => 255],
            [['file'],'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'event_name' => 'Event Name',
            'event_date_start' => 'Event Date Start',
            'event_date_end' => 'Event Date End',
            'event_time_start' => 'Event Time Start',
            'event_time_end' => 'Event Time End',
            'event_desc' => 'Event Desc',
            'banner' => 'Banner',
            'file' => 'Event Banner',
            'display' => 'Want to display at the home page?',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventregistrations()
    {
        return $this->hasMany(Eventregistration::className(), ['event_id' => 'event_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasMany(Staff::className(), ['id' => 'staff_id'])->viaTable('eventregistration', ['event_id' => 'event_id']);
    }
}
