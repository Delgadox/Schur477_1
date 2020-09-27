<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


class blogForm extends ActiveRecord
{
// Указание названия таблицы в базе данных
    public static function tableName(){
        return 'blog';
    }
// Правила насчет строчек для таблицы
    public function rules()
    {
        return [
            // name are required
            [['text'], 'string'],
            [['name'], 'required']
        ];
    }
// Функция для получения массива данных таблицы
    public function getBlogs(){
        $blog = blogForm::find()->asarray()->all();
        return $blog;
    }
}
