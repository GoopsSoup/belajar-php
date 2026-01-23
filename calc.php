<?php
    class Calc {
        private $n1, $n2;

        public function __construct($n1, $n2) {
            $this->n1 = $n1;
            $this->n2 = $n2;
        }

        public function add() {
            return $this->n1 + $this->n2;
        }

        public function multiply() {
            return $this->n1 * $this->n2;
        }

        public function subtract() {
            return $this->n1 - $this->n2;
        }

        public function divide() {
            return $this->n1 / $this->n2;
        }
    }

    $calc = new Calc(3, 2);
    echo $calc->add() . PHP_EOL;
    echo $calc->subtract() . PHP_EOL;
    echo $calc->divide() . PHP_EOL;
    echo $calc->multiply() . PHP_EOL;
?>