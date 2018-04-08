<?php

use app\models\Order;
use app\models\Invoice;

$this->params['order'] = $order;
$this->params['invoice'] = new Invoice;

//echo $order->costFormatted;

?>
<div class="card-panel blue-grey darken-3 for-cart"><i class="material-icons white-text">clear_all</i>
    <h5 class="white-text">Ваш заказ</h5>
</div>
<table class="white" id="order">
    <thead>
    <tr>
        <th class="first-col">
            <label>
                <input type="checkbox"><span></span>
            </label>
        </th>
        <th>Название</th>
        <th>Количество</th>
        <th>Стоимость</th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach ($order->orderMenuItems as $orderMenuItem):
            for ($i = 0; $i < $orderMenuItem->count; $i++):
    ?>
                <tr>
                    <td class="first-col">
                        <label>
                            <input type="checkbox"><span></span>
                        </label>
                    </td>
                    <td><?= $orderMenuItem->menuItem->name ?></td>
                    <td><?= $orderMenuItem->menuItem->weight ?> г</td>
                    <td><?= $orderMenuItem->menuItem->priceFormatted ?></td>
                </tr>
    <?php
            endfor;
        endforeach;
    ?>
    </tbody>
</table>

