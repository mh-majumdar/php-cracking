<?php
interface Cal
{
    public function sum();
    public function subtract();
}

class Add implements Cal
{
    protected $a;
    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum()
    {
        return $this->a + $this->b;
    }

    public function subtract()
    {
        return $this->a - $this->b;
    }
}

$cal = new Add(10, 5);
echo "The sum is: " . $cal->sum() . "<br>";
echo "The subtraction result is: " . $cal->subtract();
