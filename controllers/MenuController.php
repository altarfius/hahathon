<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 07.04.2018
 * Time: 12:34
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\MenuItem;
use yii\data\ActiveDataProvider;

class MenuController extends Controller
{
    public function actionIndex()
    {
        return $this->render('items', [
            'menuProvider' => new ActiveDataProvider([
                'query' => MenuItem::find(),
            ]),
        ]);
    }

    public function actionView($id) {
        return $this->render('view', [
            'menuItem' => MenuItem::findOne($id),
        ]);
    }
}