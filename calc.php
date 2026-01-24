<?php
    class Calc {
        private float $n1, $n2;

        public function __construct(float $n1, float $n2) {
            $this->setNumbers($n1, $n2);
        }

        public function setNumbers(float $n1, float $n2): void {
            if ($n2 === 0.0) {
                throw new Exception("Second number cannot be zero");
            }
        }

        public function add(): float {
            return $this->n1 + $this->n2;
        }

        public function multiply(): float {
            return $this->n1 * $this->n2;
        }

        public function subtract(): float {
            return $this->n1 - $this->n2;
        }

        public function divide(): float {
            if ($this->n2 === 0.0) {
                throw new Exception("Division by zero is not allowed");
            }
            return $this->n1 / $this->n2;
        }
    }

    $calc = new Calc(3, 0);
    echo $calc->add() . PHP_EOL;
    
    $calc->setNumbers(10, 2);
    echo $calc->divide() . PHP_EOL;

    $calc->setNumbers(9, 2);
    echo $calc->subtract();
?>