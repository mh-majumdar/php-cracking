<?php
class Add
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
}

class SubAdd extends Add
{
    public function __construct($a, $b)
    {
        parent::__construct($a, $b);
    }

    public function subtract()
    {
        return $this->a - $this->b;
    }
}

$cal = new SubAdd(10, 5);
echo "The sum is: " . $cal->sum() . "<br>";
echo "The subtraction is: " . $cal->subtract();
