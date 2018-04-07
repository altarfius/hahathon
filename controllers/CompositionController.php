<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 07.04.2018
 * Time: 12:34
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\CompositionItem;
use yii\data\ActiveDataProvider;

class CompositionController extends Controller
{
    public function actionIndex()
    {
        return $this->render('items', [
            'compositionProvider' => new ActiveDataProvider([
                'query' => CompositionItem::find(),
            ]),
        ]);
    }
}