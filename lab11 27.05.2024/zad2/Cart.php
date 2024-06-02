<?php
require_once "Product.php";
class Cart
{
    private $products;

    public function __construct()
    {
        $this->products = array();
    }

    public function addProduct(Product $product)
    {
        if ($i = $this->firstFreeIndex($this->products)) {
            $this->products[$i] = $product;
        } else
            $this->products[] = $product;
    }

    public function removeProduct(Product $product)
    {
        for ($i = 0; $i < count($this->products); $i++) {
            if ($this->products[$i] == $product) {
                $this->products[$i] = null;
                for ($o = $i; $o < count($this->products)-1; $o++) {
                    $this->products[$o] = $this->products[$o + 1];
                }
                $this->products[count($this->products)-1] = null;
                break;
            }
        }
        return count($this->products);
    }

    public function getTotal()
    {
        $sum = 0;
        foreach ($this->products as $p) {
            if ($p != null)
              $sum += ($p->getPrice() * $p->getQuantity());
            else
                break;
        }
        return $sum;
    }

    private function firstFreeIndex($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == null)
                return $i;
        }
        return false;
    }

    public function __toString() {
        $productsList = "";
        foreach ($this->products as $p) {
            if ($p != null)
                $productsList = $productsList .  $p->__toString() . "\n";
            else
                break;
        }
        return ("Products in cart: \n" . $productsList . "Total price: " . $this->getTotal()
        );
    }

}