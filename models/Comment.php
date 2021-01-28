<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id_comment
 * @property int $id_post
 * @property string $email
 * @property string $message
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_post', 'email', 'message'], 'required'],
            [['id_post'], 'integer'],
            [['message'], 'string'],
            [['email'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_comment' => 'Id Comment',
            'id_post' => 'Id Post',
            'email' => 'Email',
            'message' => 'Message',
        ];
    }
}
