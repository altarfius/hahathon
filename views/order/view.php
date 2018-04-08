<?php

use yii\helpers\Url;

$this->params['order'] = $order;
?>
<div class="card-panel blue-grey darken-3 for-cart"><i class="material-icons white-text">contacts</i>
    <h5 class="white-text">Стол 12</h5>
</div>
<?php if (isset($order->orderMenuItems)) { ?>
<div class="position-list">
    <div class="card">
        <?php foreach ($order->orderMenuItems as $orderMenuItem): ?>
            <div class="position-item">
                <div class="card-content">
                    <div class="position-title"><?= $orderMenuItem->menuItem->name ?></div>
                    <div class="position-total"><span class="position-quantity">
                        <button class="btn-floating blue-grey darken-3"><i class="material-icons">remove</i></button>
                        <input class="position-quantity-field" type="text" value="<?= $orderMenuItem->count ?>">
                        <button class="btn-floating blue-grey darken-3"><i class="material-icons">add</i></button></span>
                        <span class="position-price"><?= $orderMenuItem->fullPriceFormatted ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<a class="waves-effect waves-light btn-large green darken-1" id="to-order" href="<?= Url::to(['order/complete']) ?>">Заказать</a>
<?php } ?>