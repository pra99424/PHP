<!DOCTYPE>
<html lang="US-IN">

<head>
    <meta charset="UTF-8">
    <title> constants </title>

</head>

<body>
    <?php
    // Predefined constants
    echo "PHP_VERSION: " . PHP_VERSION . "<br>";
    echo "PHP_OS: " . PHP_OS . "<br>";
    echo "PHP_SAPI: " . PHP_SAPI . "<br>";
    echo "PHP_INT_MAX: " . PHP_INT_MAX . "<br>";
    echo "PHP_INT_SIZE: " . PHP_INT_SIZE . "<br>";
    echo "PHP_FLOAT_MAX: " . PHP_FLOAT_MAX . "<br>";
    echo "PHP_FLOAT_MIN: " . PHP_FLOAT_MIN . "<br>";
    echo "PHP_ROUND_HALF_UP: " . PHP_ROUND_HALF_UP . "<br>";
    echo "PHP_ROUND_HALF_DOWN: " . PHP_ROUND_HALF_DOWN . "<br>";
    echo "PHP_ROUND_HALF_EVEN: " . PHP_ROUND_HALF_EVEN . "<br>";
    echo "PHP_ROUND_HALF_ODD: " . PHP_ROUND_HALF_ODD . "<br>";
    echo "PHP_URL_SCHEME: " . PHP_URL_SCHEME . "<br>";
    echo "PHP_URL_HOST: " . PHP_URL_HOST . "<br>";
    echo "PHP_URL_PORT: " . PHP_URL_PORT . "<br>";
    echo "PHP_URL_USER: " . PHP_URL_USER . "<br>";
    echo "PHP_URL_PASS: " . PHP_URL_PASS . "<br>";
    echo "PHP_URL_PATH: " . PHP_URL_PATH . "<br>";
    echo "PHP_URL_QUERY: " . PHP_URL_QUERY . "<br>";
    echo "PHP_URL_FRAGMENT: " . PHP_URL_FRAGMENT . "<br>";
    echo "PHP_EOL: " . PHP_EOL . "<br>";
    echo "DIRECTORY_SEPARATOR: " . DIRECTORY_SEPARATOR . "<br>";
    echo "PATH_SEPARATOR: " . PATH_SEPARATOR . "<br>";
    echo "DEFAULT_INCLUDE_PATH: " . DEFAULT_INCLUDE_PATH . "<br>";
    echo "PEAR_INSTALL_DIR: " . PEAR_INSTALL_DIR . "<br>";
    echo "PEAR_EXTENSION_DIR: " . PEAR_EXTENSION_DIR . "<br>";
    echo "PHP_BINDIR: " . PHP_BINDIR . "<br>";
    echo "PHP_LIBDIR: " . PHP_LIBDIR . "<br>";
    echo "PHP_DATADIR: " . PHP_DATADIR . "<br>";
    echo "PHP_SYSCONFDIR: " . PHP_SYSCONFDIR . "<br>";
    echo "PHP_LOCALSTATEDIR: " . PHP_LOCALSTATEDIR . "<br>";
    echo "PHP_CONFIG_FILE_PATH: " . PHP_CONFIG_FILE_PATH . "<br>";
    echo "PHP_CONFIG_FILE_SCAN_DIR: " . PHP_CONFIG_FILE_SCAN_DIR . "<br>";
    echo "PHP_SHLIB_SUFFIX: " . PHP_SHLIB_SUFFIX . "<br>";
    echo "UPLOAD_ERR_OK: " . UPLOAD_ERR_OK . "<br>";
    echo "UPLOAD_ERR_INI_SIZE: " . UPLOAD_ERR_INI_SIZE . "<br>";
    echo "UPLOAD_ERR_FORM_SIZE: " . UPLOAD_ERR_FORM_SIZE . "<br>";
    echo "UPLOAD_ERR_PARTIAL: " . UPLOAD_ERR_PARTIAL . "<br>";
    echo "UPLOAD_ERR_NO_FILE: " . UPLOAD_ERR_NO_FILE . "<br>";
    echo "UPLOAD_ERR_NO_TMP_DIR: " . UPLOAD_ERR_NO_TMP_DIR . "<br>";
    echo "UPLOAD_ERR_CANT_WRITE: " . UPLOAD_ERR_CANT_WRITE . "<br>";
    echo "UPLOAD_ERR_EXTENSION: " . UPLOAD_ERR_EXTENSION . "<br>";

    // User-defined constants
    define("GREETING", "Hello, World!");
    echo GREETING . "<br>";
    define("NUMBER", 10);
    echo NUMBER . "<br>";
    define("PI", 3.14);
    echo PI . "<br>";
    define("FRUITS", ["apple", "banana", "cherry"]);
    echo FRUITS[0] . "<br>";

    ?>
</body>

</html>