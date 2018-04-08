<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 08.04.2018
 * Time: 10:20
 */

namespace app\components;

use Yii;
use yii\base\ActionFilter;
use app\models\Order;

class OrderSessionFilter extends ActionFilter
{
    public function beforeAction($action)
    {
        if (!Yii::$app->session->has('orderId')) {
            $order = new Order;
            if ($order->save()) {
                Yii::$app->session->set('orderId', $order->id);
            }
        }

        return parent::beforeAction($action);
    }

}