<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class SendForm extends Model
{
    public $name;
    public $subject;
    public $email;
    public $body;
    public $card;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name','email', 'subject', 'body'], 'required'],
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email, $card)
    {
        if ($this->validate()) {
            $fileName = 'uploads/birthday_card/'.$card;
            /*$content = "<p>Email:" . $this ->email . "</p>";*/
            Yii::$app->mailer->compose(/*"@app/mail/layouts/html", ["content" => $content]*/)
                ->setTo([$this->email => $this->name])
                ->setFrom($email)
                ->setSubject($this->subject)
                ->setTextBody($this->body)
               ->attach($fileName)
                ->send();

            return true;
        }
        return false;
    }
}
