<?php

foreach ($categories as $category) {
    echo $category->name . " ";
    echo $category->color . " ";
    echo $category->menuItemsCount . " ";
    echo $category->url . " ";
    echo "<br>";
}

//Вывод заказа активного