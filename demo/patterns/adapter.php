<?php
class Product {
	private $price;
	private $discount;

	function __construct($price, $discount) {
		$this->price = $price;
		$this->discount = $discount;
	}
	function getPrice() {
		return $this->price;
	}
	function getDiscount() {
		return $this->discount;
	}
}

class ProductAdapter {
	private $products;

	function __construct(Product $product) {
		$this->product = $product;
	}
	function getPrice() {
		return $this->product->getPrice() - $this->product->getDiscount();
	}
}


$product1 = new Product(100, 20);
echo 'Discounted price = '.($product1->getPrice() - $product1->getDiscount());

$product2 = new ProductAdapter($product1);
echo 'Discounted price = '.$product2->getPrice();
?>