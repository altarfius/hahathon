<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 07.04.2018
 * Time: 12:19
 */

namespace app\models;

use yii\db\ActiveRecord;

class CompositionItem extends ActiveRecord
{
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'name' => 'Наименование',
        ];
    }
}