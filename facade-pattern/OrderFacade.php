<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 22:58
 */

class OrderFacade
{
    private $product;

    public function __construct($productId)
    {
        $product = new Product(2, 3);
        $this->product = $product->find($productId);
    }

    public function generateOrder()
    {
        if ($this->checkQuantity()) {
            $this->addToCart();
            $this->calculateShipping();
            $this->applyDiscount();
            $this->placeOrder();
        }
    }

    private function addToCart () {
        $cart = new Cart();
        $cart->addItem($this->product);
    }

    private function checkQuantity() {
        return $this->product->count() != 0 ? true : false;
    }

    private function calculateShipping() {
        $shipping = new ShippingCharge($this->product);
        $shipping->calculateCharge();
    }

    private function applyDiscount() {
        $discount = new Discount();
        $discount->applyDiscount($this->product);
    }

    private function placeOrder() {
        $order = new Order();
        $order->generateOrder();
    }
}