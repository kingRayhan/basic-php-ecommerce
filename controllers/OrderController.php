<?php
/**
 * File: OrderController.php
 * Created at: 29/9/20 | 4:23 PM
 */

class OrderController extends Database
{
    public function createOrder($data)
    {
        $this->create("insert into orders (customer_name, customer_phone, customer_address) values (:customer_name, :customer_phone, :customer_address)", $data);

        $cart = new CartController();
        $cart->clear();

        header("Location: " . root_url() . "/thanks.php");
    }
}















