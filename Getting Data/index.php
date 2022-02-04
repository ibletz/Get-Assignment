<?php 
echo "GET ";
print_r($_GET);
echo "<br>POST ";
print_r($_POST);

$firstname = htmlspecialchars($_GET['first']);
$lastname = $_GET['last'];
//echo "<br>" . $firstname . " " . $lastname;

$firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING); //XSS attack prevention
$lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
/*
if(!empty($firstname) && !empty($lastname)) {
    echo $firstname;
    echo $lastname;
} else {
    echo "Missing data";
}
*/
if(isset($_GET["first"]) && isset($_GET["last"])) {
    $firstname = $_GET['first'];
    $lastname = $_GET['last'];
    if(!empty($firstname) && !empty($lastname)) {
        echo $firstname;
        echo $lastname;
    } else {
        echo "Missing data";
    }
} else {
    echo "Not Set!";
}

?>

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
    <h1>Web Processor</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="first">First Name :</label>
        <input type="text" id="first" name="first" autocomplete="off">
        
        <label for="last">Last Name :</label>
        <input type="text" id="last" name="last" autocomplete="off">
        <div>
            <button type="submit">Submit</button>
            <button type="submit" formmethod="post">Submit using POST</button>
            <button type="reset">Reset</button>
        </div>
        
    </form>
</body>
</html>