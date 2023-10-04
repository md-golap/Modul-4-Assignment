

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

    // You can also add setters if needed
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
}



// Create a Product instance
$product = new Product(1, 'T-shirt', 19.99);

// Access properties using getters
echo "Product ID: " . $product->getId() . "\n";
echo "Product Name: " . $product->getName() . "\n";
echo "Product Price: $" . $product->getPrice() . "\n";












?>




