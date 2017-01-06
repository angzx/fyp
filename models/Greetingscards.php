<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "greetingscards".
 *
 * @property integer $id
 * @property string $card_name
 * @property string $card
 */
class Greetingscards extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'greetingscards';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['card_name', 'card'], 'required'],
            [['card_name', 'card'], 'string', 'max' => 255],
            [['file'],'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'card_name' => 'Card Name',
            'card' => 'Card',
            'file' => 'Upload your own card?',
        ];
    }
}
