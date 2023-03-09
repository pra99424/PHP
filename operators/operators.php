<!DOCTYPE>
<html lang="US-IN">
<head>
    <meta charset="UTF-8">
    <title> operators </title>

</head>
<body>
<?php
// Assignment operators
$x = 10;
$y = 5;
$z = $x + $y;

// Arithmetic operators
$sum = $x + $y;
$diff = $x - $y;
$prod = $x * $y;
$quot = $x / $y;
$mod = $x % $y;
$neg = -$x;

// Comparison operators
$equal = ($x == $y);
$not_equal = ($x != $y);
$identical = ($x === $y);
$not_identical = ($x !== $y);
$greater_than = ($x > $y);
$less_than = ($x < $y);
$greater_than_or_equal = ($x >= $y);
$less_than_or_equal = ($x <= $y);

// Logical operators
$and = ($x > 0 && $y > 0);
$or = ($x > 0 || $y > 0);
$not = !($x > 0);

// Increment and Decrement operators
$x++;
$y--;

// String operators
$name = "John";
$greeting = "Hello, " . $name . "!";

// Array operators
$array1 = array("a" => "apple", "b" => "banana");
$array2 = array("c" => "cherry", "d" => "durian");
$array3 = $array1 + $array2;

// Ternary operator
$result = ($x > $y) ? "x is greater" : "y is greater";

// Null coalescing operator
$username = $_GET["username"] ?? "guest";

// Spaceship operator
$a = 3;
$b = 5;
$cmp = $a <=> $b;

// Bitwise operators
$bitwise_and = $x & $y;
$bitwise_or = $x | $y;
$bitwise_xor = $x ^ $y;
$bitwise_not = ~$x;
$bitwise_left_shift = $x << 2;
$bitwise_right_shift = $x >> 2;

// Display results
echo "Assignment operators: z = " . $z . "<br>";
echo "Arithmetic operators: sum = " . $sum . ", diff = " . $diff . ", prod = " . $prod . ", quot = " . $quot . ", mod = " . $mod . ", neg = " . $neg . "<br>";
echo "Comparison operators: equal = " . ($equal ? "true" : "false") .", not_equal = " . ($not_equal ? "true" : "false") . ", identical = " . ($identical ? "true" : "false") . ", not_identical = " . ($not_identical ? "true" : "false") . ", greater_than = " . ($greater_than ? "true" : "false") . ", less_than = " . ($less_than ? "true" : "false") . ", greater_than_or_equal = " . ($greater_than_or_equal ? "true" : "false") . ", less_than_or_equal = " . ($less_than_or_equal ? "true" : "false") . "<br>";
echo "Logical operators: and = " . ($and ? "true" : "false") . ", or = " . ($or ? "true" : "false") . ", not = " . ($not ? "true" : "false") . "<br>";
echo "Increment and Decrement operators: x = " . $x . "<br/>" ;

?>
</body>
</html>
