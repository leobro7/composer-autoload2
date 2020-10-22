<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoloading</title>
</head>
<body>

<?php
use HelloWorld;
require_once '../vendor/autoload.php';
$hellocomposer = new SayHello();
echo $hello->talk();

?>

</body>
</html>