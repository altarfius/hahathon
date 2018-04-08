<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 07.04.2018
 * Time: 15:04
 */

namespace app\controllers;

use Yii;
use app\models\Category;
use app\models\Order;
use yii\web\Controller;
use app\components\OrderSessionFilter;

class CategoryController extends Controller
{
    public function behaviors()
    {
        return [
            [
                'class' => OrderSessionFilter::className(),
            ],
        ];
    }

    public function actionGrid()
    {
        return $this->render('grid', [
            'categories' => Category::find()->all(),
            'order' => Order::findOne(Yii::$app->session->get('orderId')),
        ]);
    }

    public function actionView($id) {
        return $this->render('view', [
            'category' => Category::findOne($id),
            'order' => Order::findOne(Yii::$app->session->get('orderId')),
        ]);
    }

    public function actionResetorder() {
        Yii::$app->session->remove('orderId');
    }
}