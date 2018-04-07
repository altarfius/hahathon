<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 07.04.2018
 * Time: 15:04
 */

namespace app\controllers;

use app\models\Category;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionGrid()
    {
        return $this->render('grid', [
            'categories' => Category::find()->all(),
        ]);
    }

    public function actionView($id) {
        return $this->render('view', [
            'category' => Category::findOne($id),
        ]);
    }
}