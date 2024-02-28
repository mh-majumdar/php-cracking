<?php
// Printing Array
$s = array("PHP", "is", "Fun");
echo "The array is: " . implode(", ", $s) . "<br>";

foreach ($s as $x) {
    echo "$x<br>";
}

// Sorting the array
sort($s);
echo "Sorted array: " . implode(", ", $s);
