<?php
class Store {
    private $items = [];
    private int $price;
    private string $owner;

    public function __construct(string $owner) {
        $this->owner = $owner;
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
    
    public function __construct(string $owner) {
        parent::__construct($owner);
    }

    
}

$bought = new Store("Andhika");
$bought->addItem('Laptop');
echo $bought->getItems();

?>