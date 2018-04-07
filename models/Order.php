<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 07.04.2018
 * Time: 17:48
 */

namespace app\models;

use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    public function getOrderMenuItems()
    {
        return $this->hasMany(OrderMenuItem::className(), ['order_id' => 'id']);
    }

    public function getMenuItems()
    {
        return $this->hasMany(MenuItem::className(), ['id' => 'menu_item_id'])
            ->via('orderMenuItems');
    }
}