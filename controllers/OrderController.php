<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 07.04.2018
 * Time: 17:56
 */

namespace app\controllers;

use app\models\MenuItem;
use app\models\OrderMenuItem;
use Yii;
use app\models\Order;
use yii\web\Controller;

class OrderController extends Controller
{
    public function actionView($id) {
        return $this->render('view', [
            'order' => Order::findOne($id)
        ]);
    }

    public function actionCreate() {
        $order = new Order;

        if ($order->load(Yii::$app->request->post()) && $order->save()) {
            Yii::$app->session->set('orderId', $order->id);
            return $this->redirect(['view', 'id' => $order->id]);
        } else {
            return $this->render('create', [
                'order' => $order,
            ]);
        }
    }

    public function actionIncrease() {
        $orderId = Yii::$app->request->post('orderId');
        $menuItemId = Yii::$app->request->post('menuItemId');

        $orderMenuItem = OrderMenuItem::find()->andWhere([
            'order_id' => $orderId,
            'menu_item_id' => $menuItemId,
        ]);

        if ($orderMenuItem == null) {
            $order = Order::findOne($orderId);
            if ($order == null) {
                $order = new Order;
                $order->save();
            }

            $menuItem = MenuItem::findOne($menuItemId);

            $orderMenuItem = new OrderMenuItem;
            $orderMenuItem->save();
            $orderMenuItem->link('order', $order);
            $orderMenuItem->link('menuItem', $menuItem);
        } else {
            $orderMenuItem->updateCounters(['count' => 1]);
        }

        return $this->renderAjax('order', [
            'order' => $orderMenuItem->order,
        ]);
    }

    public function actionDecrease() {
        $orderMenuItem = OrderMenuItem::find()->andWhere([
            'order_id' => Yii::$app->request->post('orderId'),
            'menu_item_id' => Yii::$app->request->post('menuItemId'),
        ]);

        $orderMenuItem->updateCounters(['count' => -1]);
        if ($orderMenuItem->count >= 0) {
            $orderMenuItem->delete();
        }

        return $this->renderAjax('order', [
            'order' => $orderMenuItem->order,
        ]);
    }

    public function actionComplete($id) {
        $order = Order::findOne($id);

        $order->complete = 1;

        $order->save();

        return $this->render('order', [
            'order' => $order,
        ]);
    }
}