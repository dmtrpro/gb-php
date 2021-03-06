import * as $ from "jquery";
import {ProductCollection} from "./product/Product";
import {Cart, CartAmountCounter, CartSumCounter} from "./cart/Cart";

$(function () {
    let item = new ProductCollection();
    let cart = new Cart();
    let cartTotal = new CartSumCounter();
    let cartCounter = new CartAmountCounter();

    item.attach('#products-list', true);
    cart.attach('#main-cart', true);

    cartCounter.hideOnNull = true;
    cartCounter.attach('#cart-counter', true);
    cartTotal.attach('#cart-total', true);

    $('.categories').on('click', '.categories-single', function (e) {
        $(this).toggleClass('active');
    })
});