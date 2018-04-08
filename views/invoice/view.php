<?php

$this->params['invoice'] = $invoice;

use yii\helpers\Url;

?>
<div class="card-panel blue-grey darken-3 for-cart"><i class="material-icons white-text">assignment</i>
    <h5 class="white-text">Ваш чек</h5>
</div>
<div class="position-list">
    <div class="card">
        <div class="position-item">
            <div class="card-content">Итого: 
                <?= $order->costFormatted ?>
            </div>
        </div>
    </div>
</div>
<a class="waves-effect waves-light btn-large green darken-1" id="to-pay" href="<?= Url::to(['order/complete']) ?>">Оплатить</a>