<?php
    class Account {
        protected string $id;
        protected float $balance;

        public function __construct(string $id, float $balance) {
            $this->id = $id;
            $this->balance = $balance;
        }

        public function getSummary():string {
            return "Account <{$this->id}> Has balance {$this->balance}";
        }
    }

    class PremiumAccount extends Account{
        private int $rewardPoints = 0;

        public function __construct(string $id, float $balance) {
            parent::__construct($id, $balance);
        }

        public function addPoints(int $points):void {
            $this->rewardPoints += $points;
        }

        public function getSummary():string {
            return "Account <{$this->id}> Has balance {$this->balance} and {$this->rewardPoints} points";
        }
    }

    $normalAcc = new Account("A-001", 20023.33);
    echo $normalAcc->getSummary();
    echo "\n";

    $premiumAcc = new PremiumAccount("AP-001", 40000.3233);
    $premiumAcc->addPoints(460);
    echo $premiumAcc->getSummary();
    echo "\n";
?>