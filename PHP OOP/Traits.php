<?php
trait Cal
{
    public function sum()
    {
        return $this->a + $this->b;
    }

    public function subtract()
    {
        return $this->a - $this->b;
    }
}

class Add
{
    use Cal;

    protected $a;
    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
}

// Create an instance of Add using the Calculator trait
$cal = new Add(10, 5);

// Call the sum method
echo "The sum is: " . $cal->sum() . "<br>";

// Call the subtract method
echo "The subtraction result is: " . $calculator->subtract();
