<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id_post
 * @property int $id_kategori
 * @property string $title
 * @property string $article
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori', 'title', 'article'], 'required'],
            [['id_kategori'], 'integer'],
            [['article'], 'string'],
            [['title'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_post' => 'Id Post',
            'id_kategori' => 'Id Kategori',
            'title' => 'Title',
            'article' => 'Article',
        ];
    }
}
