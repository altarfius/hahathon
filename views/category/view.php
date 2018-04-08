<?php
$this->params['order'] = $order;
$this->params['categories'] = $categories;
$this->params['category'] = $category;
?>

<div class="products-list">
    <?php foreach($category->menuItems as $item): ?>
        <div class="products-list-item">
            <div class="product__img">
            <?= \yii\helpers\Html::img('menu/' . $item->image) ?>
            </div>
            <div class="product__info">
                <div class="product__title"><?=$item->name; ?></div>
                <div class="product__composition"><?=$item->compositionString; ?></div>
                <div class="product-reviews">
                    <span class="material-icons">star</span>
                    <span class="material-icons">star</span>
                    <span class="material-icons">star</span>
                    <span class="material-icons">star_half</span>
                    <span class="material-icons">star_border</span>
                    <a href="!#">32 отзыва</a>
                </div>
                <button class="product-to-cart btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></button>
            </div>
        </div>
    <?php endforeach; ?>
</div>