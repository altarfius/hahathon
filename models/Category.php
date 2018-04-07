<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 07.04.2018
 * Time: 15:00
 */

namespace app\models;

use yii\helpers\Url;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'name' => 'Наименование категории',
            'image' => 'Картинка',
        ];
    }

    public function getUrl() {
        return Url::to(['category/view', 'id' => $this->id]);
    }

    public function getMenuItems()
    {
        return $this->hasMany(MenuItem::className(), ['category_id' => 'id']);
    }

    public function getMenuItemsCount()
    {
        return $this->getMenuItems()->count();
    }
}