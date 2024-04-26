<?php
declare(strict_types=1);

require '../vendor/autoload.php';

class Product
{
    public float $price;
    private $discountProduct = 10;

    public function setPrice($price)
    {
        if(is_numeric($price) && $price > 1){
            $this->price = $price - $this->discountProduct;
        } else {
            throw new \Exception('Invalid price');
        }
        
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

$product = new Product;
$product->setPrice('100');
echo $product->getPrice();