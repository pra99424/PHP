<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types of Datatypes</title>
</head>

<body>
    <p> Types of DataTypes </p>
    <br />
    <?php
        $a_bool = true;
        $a_sentence = "pradeep_T";
        $b_sentence = 'Lamp';
        $a_number = 12;
    ?>
    <br />
        <p> gettype is function function can check the datatypes</p>
    <?php
        echo gettype($a_bool), "\t";
    ?>
    <?php
        echo gettype($b_sentence), "\t";
    ?>
    <br />
        <p>Display of the datatypes </p>
    <?php
    // If this is an integer, increment it by four
        if (is_int($a_number)) {
            $a_number += 4;
        }
            var_dump($a_number); //it is printing function which embed with the datatype
    ?>
    <br />
        <p> The Boolean datatype</p>
    <?php   
        echo "This condition is TRUE and FALSE.";
        ECHO "IF the condition is true is 1 and flase is 0";  
    ?>  
    <br/>
    <p> Interger datatype </p>
    <?php   
        $decimal = 34;  
        $octal = 0243;  
        $hexadecimal = 0x45;  
            echo "Decimal number: " .$decimal. "</br>";  
            echo "Octal number: " .$octal. "</br>";  
            echo "HexaDecimal number: " .$hexadecimal. "</br>";  
    ?>  
    <br />
    <p> decimal datatype </p>
    <?php   
        $c_number = 19.34;  
        $d_number = 54.472;  
        $sum_ofTwoValues = $c_number+ $d_number;  
            echo "Addition of floating numbers: " .$sum_ofTwoValues;  
    ?>
    <br />
    <p> String datatype </p>
    <?php
        $company = "Aspire Systems";  
        //both single and double quote statements will treat different  
            echo "Hello $company";  
            echo "</br>";  
            echo 'Hello $company';              

    ?>
    <br />
    <p> Array datatype </p>
    <?php 
        $bikes = array ("Royal Enfield", "Yamaha", "KTM");  
        var_dump($bikes);   //the var_dump() function returns the datatype and values  
        echo "</br>";  
        echo "Array Element1: $bikes[0] </br>";  
        echo "Array Element2: $bikes[1] </br>";  
        echo "Array Element3: $bikes[2] </br>";  

    ?>
    <br />
    <p> object datatype </p>
    <?php
            class bike {  
                function model() {  
                     $model_name = "Royal Enfield";  
                     echo "Bike Model: " .$model_name;  
                   }  
           }  
           $obj = new bike();  
           $obj -> model();  

    ?>
    <br />
    <p> NULL datatype </p>
    <?php
        $null_varaibles = NULL;  
        echo $null_varaibles;
        echo "It is will not give output.";

    ?>


</body>

</html>