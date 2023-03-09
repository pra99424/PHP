<!DOCTYPE html>
<html>
<head>
	<title>Pre-defined Variables in PHP</title>
</head>
<body>

<?php
// Example usage of pre-defined variables in PHP

// $_SERVER
echo "The name of the current script is: " . $_SERVER['http://example.com/index.php?name=John&age=25'] . "<br>";

// $_GET
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    echo "hii",$age;
    echo "Hello, $name! You are $age years old", "<br>";
    
}

// $_POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    echo "Thanks for submitting your email address: $email <br>";
}

// $_SESSION
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Welcome back, $username! <br>";
} else {
    $_SESSION['username'] = 'JohnDoe';
    echo "Welcome, guest! <br>";
}

// $_COOKIE
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    echo "Hello, $username! <br>";
} else {
    setcookie('username', 'JaneDoe', time() + 3600);
    echo "Hello, guest! <br>";
}

// $_FILES
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['photo'])) {
    $file = $_FILES['photo'];
    echo "The uploaded file name is: " . $file['name'] . "<br>";
}

// $GLOBALS
$my_var = 'Hello, world!';
function print_var() {
    echo $GLOBALS['my_var'] . "<br>";
}
print_var();
?>

</body>
</html>
