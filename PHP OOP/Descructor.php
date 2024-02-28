<?php
class Add
{
    public function __construct()
    {
        echo "Class Templete<br>";
    }

    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function __destruct()
    {
        echo "destroyed";
    }
}

$calculator = new Add();
$result = $calculator->sum(5, 3);
echo "The sum is: $result<br>";
unset($calculator);
