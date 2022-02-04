<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>
<body>
    <h1>
        <?php
        // While loop
        $counter = 0;
        while($counter < 5) {
            echo $counter . "<br>";
            $counter++;
        }
        // For loop
        $message = null;
        for ($counter = 10; $counter > 0; $counter--) {
            $message .= $counter . "<br>";
        }
        echo $message;

        // While loop in array
        $arr = array('sam', 'john', 'doe', 'paul');
        while ($counter < count($arr)) {
            echo $arr[$counter] . "<br>";
            $counter++;
        }
        echo "<br>";
        // For loop in array
        for ($counter = 0; $counter < count($arr); $counter++) {
            echo $arr[$counter] . "<br>";
        }
        ?>
    </h1>
</body>
</html>