<!DOCTYPE>
<html lang="US-IN">

<head>
    <meta charset="UTF-8">
    <title> oops </title>

</head>

<body>
    <?php
    class Car
    {
        // properties (variables)
        public $make;
        public $model;
        public $year;

        // methods (functions)
        public function startEngine()
        {
            echo "Starting the engine...<br>";
        }

        public function stopEngine()
        {
            echo "Stopping the engine...<br>";
        }
    }
    ?>
    <?php
        $myCar = new Car();
    ?>
    <?php
        $myCar->make = "Toyota";
        $myCar->model = "Corolla";
        $myCar->year = 2022;
    ?>
    <?php
        $myCar->startEngine(); // output: Starting the engine...
        $myCar->stopEngine(); // output: Stopping the engine...
    ?>        


</body>

</html>