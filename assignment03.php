<?php



class Product {
    // Properties
    private $id;
    private $name;
    private $price;

    // Constructor
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to show product details
    public function showDetails() {
        echo "Product ID: {$this->id}\n";
        echo "Product Name: {$this->name}\n";
        echo "Product Price: $" . number_format($this->price, 2) . "\n";
    }
}


// Creating a Product instance
$product1 = new Product(1, "T-shirt", 19.99);

// Displaying product details
$product1->showDetails();























?>