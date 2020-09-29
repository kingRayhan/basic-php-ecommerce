<?php
/**
 * File: CartController.php
 * Created at: 29/9/20 | 2:49 PM
 */

class CartController extends Database
{
    /**
     * Get all items from cart
     * @return array
     */
    public function getCart()
    {
        return $this->queryAll("select * from carts");
    }

    /**
     * Add product to cart
     * @param $title
     * @param $price
     * @return bool
     */
    public function addToCart($title, $price)
    {
        return $this->create("insert into  carts (title , price) values (:title, :price)", [
            'title' => $title,
            'price' => $price
        ]);
    }

    /**
     * Remove a product from cart
     * @param $id
     */
    public function removeFromCart($id)
    {
        $this->query("delete FROM carts WHERE id = " . $id);
    }

    /**
     * get total item count in cart
     * @return mixed
     */
    public function count()
    {
        return $this->query("SELECT COUNT(*) from carts")->count;
    }


    /**
     * Get total item price from cart
     * @return mixed
     */
    public function totalPrice()
    {
        $sum = $this->query("SELECT SUM(price) from carts")->sum;
        return $sum ? $sum : 0;
    }

    /**
     * Clear cart
     */
    public function clear()
    {
        $this->query("delete from carts");
    }
}