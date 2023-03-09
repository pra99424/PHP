<!DOCTYPE>
<html lang="US-IN">

<head>
    <meta charset="UTF-8">
    <title> Control_Structures </title>

</head>

<body>
    <?php
    // if-else statement
    $num = 10;
    if ($num > 0) {
        echo "Positive number.<br>";
    } else {
        echo "Negative number.<br>";
    }

    // switch statement
    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "Today is Monday.<br>";
            break;
        case "Tuesday":
            echo "Today is Tuesday.<br>";
            break;
        case "Wednesday":
            echo "Today is Wednesday.<br>";
            break;
        default:
            echo "Today is not a weekday.<br>";
    }

    // while loop
    $i = 1;
    while ($i <= 10) {
        echo $i . " ";
        $i++;
    }
    echo "<br>";

    // do-while loop
    $i = 1;
    do {
        echo $i . " ";
        $i++;
    } while ($i <= 10);
    echo "<br>";

    // for loop
    for ($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }
    echo "<br>";

    // foreach loop
    $fruits = ["apple", "banana", "cherry"];
    foreach ($fruits as $fruit) {
        echo $fruit . " ";
    }
    echo "<br>";

    // continue statement
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        echo $i . " ";
    }
    echo "<br>";

    // break statement
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            break;
        }
        echo $i . " ";
    }
    echo "<br>";

    // return statement
    function add($num1, $num2)
    {
        $sum = $num1 + $num2;
        return $sum;
    }
    $result = add(10, 20);
    echo $result . "<br>";

    // exit statement
    echo "Before exit.<br>";
    exit("Exiting script.");
    echo "After exit.<br>";
    ?>

</body>

</html>