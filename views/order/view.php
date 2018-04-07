<?php

echo $order->id . '<br>';

foreach ($order->orderMenuItems as $orderMenuItem) {
    echo $orderMenuItem->menuItem->name . ' ' . $orderMenuItem->count . ' ' . $orderMenuItem->fullPrice . '<br>';
}

echo $order->cost . '<br>';