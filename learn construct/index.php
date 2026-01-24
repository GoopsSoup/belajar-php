<?php
    class Bank {
        private $value;
        private string $username;

        public function __construct($value, string $username) {
            $this->value = $value;
            $this->username = $username;
        }

        public function getUser() {
            return "$this->username Bank worth <$this->value>";
        }
    }


    $user = new Bank(8000000, "Andhika");
    echo $user->getUser();
?>