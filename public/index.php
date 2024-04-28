<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

interface CartInterface {
    public function add($product);
    public function remove($product);
    public function getTotal();
    public function getProducts();
}

class Cart implements CartInterface {
    private $products = [];

    public function add($product) {
        $this->products[] = $product;
    }

    public function remove($product) {
        $this->products = array_values(array_filter($this->products, function($item) use ($product) {
            return $item->getName()!= $product->getName();
        }));
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function getProducts() {
        return $this->products;
    }
}