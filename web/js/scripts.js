/**
 * Created by MikaSpell on 08.04.2018.
 */
$(function () {
    $('.products-list').on('click', '.product-to-cart', function (e) {
        e.preventDefault();
        var orderId = $(this).attr('data-order-id');
        var itemId = $(this).attr('data-item-id');

        $.ajax({
            url: '/index.php?r=order/increase',
            method: 'post',
            data: {orderId: orderId, menuItemId: itemId}
        }).done(function (data) {
            console.log(data);
        })
    })
});