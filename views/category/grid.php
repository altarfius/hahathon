<?php

foreach ($categories as $category) {
    echo $category->name . " ";
    echo $category->color . " ";
    echo $category->count . " ";
    echo $category->url . " ";
    echo "<br>";
}