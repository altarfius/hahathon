<?php
/**
 * Created by PhpStorm.
 * User: altar
 * Date: 07.04.2018
 * Time: 12:53
 */

namespace app\models;

use yii\db\ActiveRecord;

class MenuItem extends ActiveRecord
{
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'name' => 'Наименование блюда',
            'image' => 'Картинка',
            'price' => 'Цена',
            'weight' => 'Вес',
            'compositionItems' => 'Состав',
            'category' => 'Категория',
        ];
    }

    public function getCompositionItems()
    {
        return $this->hasMany(CompositionItem::className(), ['id' => 'composition_item_id'])
            ->viaTable('menu_item_composition_item', ['menu_item_id' => 'id']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getCompositionString() {
        $items = array_map(function($item) {
            return $item->name;
        }, $this->compositionItems);

        return implode(', ', $items);
    }
}