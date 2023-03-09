<!DOCTYPE>
<html lang="US-IN">

<head>
    <meta charset="UTF-8">
    <title> Expressions </title>

</head>

<body>
    <?php
    // arithmetic expressions
    $a = 10;
    $b = 5;
    $c = $a + $b;
    $d = $a - $b;
    $e = $a * $b;
    $f = $a / $b;
    $g = $a % $b;

    echo "c = " . $c . "<br>";
    echo "d = " . $d . "<br>";
    echo "e = " . $e . "<br>";
    echo "f = " . $f . "<br>";
    echo "g = " . $g . "<br>";

    // string expressions
    $hello = "Hello";
    $world = "World";
    $greeting = $hello . " " . $world;

    echo $greeting . "<br>";

    // assignment expressions
    $num1 = 10;
    $num2 = 20;
    $num1 += $num2;
    echo "num1 = " . $num1 . "<br>";

    // comparison expressions
    $num1 = 10;
    $num2 = 20;
    $result1 = ($num1 == $num2);
    $result2 = ($num1 != $num2);
    $result3 = ($num1 > $num2);
    $result4 = ($num1 < $num2);
    $result5 = ($num1 >= $num2);
    $result6 = ($num1 <= $num2);

    echo "result1 = " . $result1 . "<br>";
    echo "result2 = " . $result2 . "<br>";
    echo "result3 = " . $result3 . "<br>";
    echo "result4 = " . $result4 . "<br>";
    echo "result5 = " . $result5 . "<br>";
    echo "result6 = " . $result6 . "<br>";

    // logical expressions
    $num1 = 10;
    $num2 = 20;
    $result1 = ($num1 == 10 && $num2 == 20);
    $result2 = ($num1 == 10 || $num2 == 30);
    $result3 = !($num1 == 20);

    echo "result1 = " . $result1 . "<br>";
    echo "result2 = " . $result2 . "<br>";
    echo "result3 = " . $result3 . "<br>";

    // ternary expressions
    $num1 = 10;
    $num2 = 20;
    $result = ($num1 > $num2) ? "Greater than" : "Less than or equal to";
    echo $result . "<br>";

    // type test expressions
    $num = 10;
    $float = 10.5;
    $str = "Hello";
    $arr = [1, 2, 3];
    $bool = true;

    echo "num is integer: " . is_int($num) . "<br>";
    echo "float is float: " . is_float($float) . "<br>";
    echo "str is string: " . is_string($str) . "<br>";
    echo "arr is array: " . is_array($arr) . "<br>";
    echo "bool is boolean: " . is_bool($bool) . "<br>";
    ?>
</body>

</html>