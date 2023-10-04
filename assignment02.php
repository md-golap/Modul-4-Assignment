<?php


class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }
}



$product1 = new Product(1, "Product 1", 19.99);
$product2 = new Product(2, "Product 2", 29.95);

echo "Product 1 Price: $" . $product1->getFormattedPrice() . PHP_EOL;
echo "Product 2 Price: $" . $product2->getFormattedPrice() . PHP_EOL;





?>