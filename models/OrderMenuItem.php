<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 07.04.2018
 * Time: 17:49
 */

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class OrderMenuItem extends ActiveRecord
{
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    public function getMenuItem()
    {
        return $this->hasOne(MenuItem::className(), ['id' => 'menu_item_id']);
    }

    public function getFullPrice() {
        return $this->count * $this->menuItem->price;
    }

    public function getFullPriceFormatted() {
        return Yii::$app->formatter->asCurrency($this->fullPrice);
    }
}