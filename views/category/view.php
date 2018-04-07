<?php

echo $category->name . "<br>";
echo $category->image . "<br>";
echo $category->menuItemsCount . "<br>";

foreach ($category->menuItems as $item) {
    echo $item->name . "<br>";
    echo $item->compositionString . "<br>";
    echo $item->description . "<br>";
    echo $item->image . "<br>";
    echo $item->price . "<br>";
    echo $item->weight . "<br>";
    echo $item->category->name . "<br>";
}

//Список категорий
//Заказ активный текущий