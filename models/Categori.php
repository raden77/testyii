<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categori".
 *
 * @property int $id_categori
 * @property string $categori
 */
class Categori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categori'], 'required'],
            [['categori'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_categori' => 'Id Categori',
            'categori' => 'Categori',
        ];
    }
}
