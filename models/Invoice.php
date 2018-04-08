<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 08.04.2018
 * Time: 12:32
 */

namespace app\models;

use yii\db\ActiveRecord;

class Invoice extends ActiveRecord
{
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['order_id' => 'id']);
    }
}