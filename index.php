<?php
class Store {
    private $items = [];
    private int $price;
    private string $customer;

    public function __construct(string $customer) {
        $this->customer = $customer;
    }

    public function addItem($item): string {
        return $this->items[] = $item;
    }
    
    public function getItems() {
        foreach ($this->items as $things) {
            return $things;
        }
    }
}

class Customer extends Store{
    
    public function __construct(string $customer) {
        parent::__construct($customer);
    }
}

$bought = new Store("Andhika");
$bought->addItem('Laptop');
echo $bought->getItems();

?>