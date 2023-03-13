<!DOCTYPE>
<html lang="US-IN">

<head>
    <meta charset="UTF-8">
    <title> errors </title>

</head>

<body>
<?php
$file=fopen("mytestfile.txt","r");
?> 
 <?php
if(file_exists("mytestfile.txt")) {
  $file = fopen("mytestfile.txt", "r");
} else {
  die("Error: The file does not exist.");
}
?> 
    

</body>

</html>