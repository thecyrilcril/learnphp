<?php

require __DIR__ . '/vendor/autoload.php';

$name = "John Doe";

// interpolation
// echo "Hello, $name! Welcome to our website.<br>";

// heredocs
// echo <<<TXT
//     Hello, $name! Welcome to our website.<br>
// TXT;

// sprintf
sprintf("Hello, %s! Welcome to our website, you should be at least %d", $name, 23);


$welcome_string = (new App\Salutation)->greet($name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?= $welcome_string; ?>
    </div>
</body>
</html>
