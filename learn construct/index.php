<?php
    class Status {
        private string $name;
        private int $health;

        public function __construct(string $name, int $health) {
            $this->name = $name; 
            $this->health = $health; 
        }

        public function damageTaken(int $damage):int {
            return $this->health -= $damage;
        }

        public function healthHealed(int $heal) {
            if ($this->health += $heal > 100) {
                return $this->health = 100;
            }
            return $this->health += $heal;
        }

        public function showStatus():string {
            if ($this->health <= 0) {
                return "Player died\n";
            }
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