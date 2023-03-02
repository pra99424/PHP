
<!DOCTYPE>
<html lang="US-IN">
<head>
    <meta charset="UTF-8">
    <title> PHP practice </title>

</head>
<body>

<?php 
/*Three types of tag are available in php
1.normal tag"(<?php ?>)"
2.short echo tag(<?= ?>)
3.short tag(<? ?>)*/

// echo is printing method in php dispalying output
echo "Welcome to Pradeep PHP practice";?>

<?php
// '$' symbol is denotes as the variable initialize 
    $var ="I am Studying PHP ";
    echo "\n";
    echo $var ;
?>
<br/>
<?php
/* variable scope in PHP are:
    local
    global
    static */
// local varaible 
    $localVaraible=10;
        echo $localVaraible;
        echo "\t";
    function test_on_localVaraible(){
        $localVaraibles=10;
        echo $localVaraibles;
        echo "\t";
}
//echo $localVaraibles//it is show the error.
    test_on_localVaraible();
?>
<br/>

<?php

// gobal varaible
    $first_varaible = 5; // global scope
    function test_on_VaraibleScope() {

      // using "first_varaible" inside this function will generate an error
      //echo " $first_varaible";

      // declare the varaiable globally by using the 'global' keyword
        global $first_varaible;
            echo " $first_varaible";
            echo "\n";

    }
    test_on_VaraibleScope();
        echo " $first_varaible";
        echo "\t";
?>
<br/>

<?php
//static varaible        
    function test_on_StaticScope() {
        static $staticVaraible = 0;
            echo $staticVaraible;
            echo "\n";
            $staticVaraible++;
        }

        test_on_StaticScope();
        test_on_StaticScope();
        test_on_StaticScope();

?>
<br/>
<?php  
    echo print "We can use the print keyword for print the output.";// print has return type 1 
?>
<br/>
<?php
     echo "The \"echo\" keyword doesn't have return type in it. " ;
?>
<br/>
<?php
     print "The \"print\" keyword  have return type in it. It value of return is 1. "; 
?>
<br/>
<?php 
    echo "We can"," ","use",",", "multiple quotes"," ","comma"," ","access the output";
?>
<br/>

<?php
 //$this = 23;
 //echo $this;
 ?>

</body>

</html>

