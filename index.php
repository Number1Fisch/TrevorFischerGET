<?php
$firstname = $_GET['first'];
$lastname = $_GET['last'];
$age = $_GET['age'];
htmlspecialchars($_GET['first']);
htmlspecialchars($_GET['last']);
htmlspecialchars($_GET['age']);
$firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);
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
    <h1>Tell Us About Yourself</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <label for="first">First Name :</label>
        <input type="text" id="first" name="first" autocomplete="off">
        <label for="last">Last Name :</label>
        <input type="text" id="last" name="last" autocomplete="off">
        <label for="first">Age :</label>
        <input type="number" id="age" name="age" autocomplete="off">
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <p><?php 
    if (empty($firstname) || empty($lastname) || empty($age)){
        echo "Please fill out and submit the form above for a customized message.";
    }
    else{
        echo "Hello, my name is " . $firstname . " " . $lastname . ".<br>";
        if ($age >= 18){
            echo "I am old enough to vote in the United States.<br>";
        }
        else{
            echo "I am not old enough to vote in the United States.<br>";
        }
        echo "I am at least " . 365 * $age . " days old.<br>";
        echo date('d-m-y');
    }
    ?> </p>
</body>

</html>