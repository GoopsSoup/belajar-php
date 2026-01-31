<?php
    class Account {
        protected string $id;
        protected string $balance;

        public function __construct(string $id, string $balance) {
            $this->id = $id;
            $this->balance = $balance;
        }

        public function getSummary():string {
            return "Has balance {$this->balance}";
        }
    }

    class PremiumAccount extends Account{
        private string $rewardPoints;

        public function __construct(string $balance, string $rewardPoints) {
            parent::__construct($this->balance);
            $this->rewardPoints = $rewardPoints;
        }

        
    }
?>