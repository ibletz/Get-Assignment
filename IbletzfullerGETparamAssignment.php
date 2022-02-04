<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Data</title>
    <link rel="stylesheet" href="css/main.css">
</head>
    <body>
        <?php

        $firstname = htmlspecialchars($_GET['first']);
        $lastname = htmlspecialchars($_GET['last']);
        $age = htmlspecialchars($_GET['age']);

        $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING); //sanitize
        $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);

        if (isset($_GET['first']) && isset($_GET['last']) && isset($_GET['age'])) {
            if (!empty($firstname) && !empty($lastname) && !empty($age)) {
                echo "<h1>Hello, my name is $firstname $lastname.</h1>";
                echo "<br>";
                echo "<h1>I am $age years old, and ";
                if ($age < 18) {
                    echo "I am not old enought to vote in the United States</h1>.";
                } else {
                    echo "I am old enough to vote in the United States.</h1>";
                }
            } else {
                echo "missing data";
            }
        } else {
            echo "missing data";
        }
        ?>
    </body>
</html>