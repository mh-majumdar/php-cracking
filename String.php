<?php
$s = "Hello, PHP";

// Basic string fuction of PHP
echo "String length is: " . strlen($s) . "<br>";
echo "Total Word: " . str_word_count($s) . "<br>";
echo "Upper-Case:" . strtoupper($s) . "<br>";
echo "Lower-Case:" . strtolower($s) . "<br>";
echo "Replace:" . str_replace("PHP", "Wolrd", $s) . "<br>";
echo "Reverse:" . strrev($s) . "<br>";
echo "Remove Whitespace:" . trim($s) . "<br>";

// String Concatation
$a = "Hello";
$b = "World";
$c = "$a $b";
echo "$c<br>";
