<?php
    class Product {
        private string $name;
        private int $price;

        public function __construct(string $name, $price) {
            $this->name = $name; 
            $this->price = $price; 
        }

        public function displayProduct():string {
            return "$this->name price: $this->price";
        }
    }

    $show = new Product("Laptop", 10000000);
    echo $show->displayUser();
?>