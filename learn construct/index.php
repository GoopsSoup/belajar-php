<?php
    class Status {
        private string $name;
        private int $health;

        public function __construct(string $name, int $health) {
            $this->name = $name; 
            $this->health = $health; 
        }

        public function damageTaken(int $damage):void  {
            $this->health = max(0, $this->health - $damage);
        }

        public function healthHealed(int $heal): void {
            $this->health = min(100, $this->health + $heal);
        }

        public function isDead():bool {
            return $this->health === 0;
        }

        public function showStatus():string {
            return "Name: $this->name \nHealth: $this->health\n\n";
        }
    }

    $player = new Status("Player-1", 100);
    echo $player->showStatus();

    $player->damageTaken(67);
    echo $player->showStatus();

    $player->healthHealed(100);
    echo $player->showStatus();

    $player->damageTaken(67);
    echo $player->showStatus();
?>