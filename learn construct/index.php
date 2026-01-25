<?php
    class Status {
        private string $name;
        private int $health;

        public function __construct(string $name, int $health) {
            $this->name = $name; 
            $this->health = $health; 
        }

        public function damageTaken(int $damage):void {
            $this->health -= $damage;
        }

        public function showStatus():string {
            return "Name: $this->name \nHealth: $this->health\n";
        }
    }

    $player = new Status("Player-1", 100);
    echo $player->showStatus();
    
    echo $player->damageTaken(29);
    echo $player->showStatus();
?>