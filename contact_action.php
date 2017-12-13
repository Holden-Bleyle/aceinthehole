<?php
/*Action page for the contact form; places the contents into the mySQL database.*/
$servername = "localhost";
$username = "holdenbl_01";
$password = "Reversefold1";
$dbname = "holdenbl_aceinthehole";

print_r($name);
?>

<!DOCTYPE html>
<html lang="en">
<!--HEAD SECTION-->

<head>
    <meta charset="utf-8">
    <!--IMPORT LINKS-->
    <!--BOOTSTRAP-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--MAIN STYLE-->
    <link href="assets/css/style.css" rel="stylesheet">
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Days+One|Ubuntu+Condensed" rel="stylesheet">
</head>
<body></body>
    
<?php

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("
    <p class='formresponse'>Oops! Your connection didn't hit the ground running. Try resubmitting?</p>
    ");
}

/*Retrieve the POST data*/
$name = $_POST['name'];
$email = $_POST['email'];
$contacttype = $_POST['contacttype'];
$response = $_POST['response'];

$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$contacttype = mysqli_real_escape_string($conn, $contacttype);
$response = mysqli_real_escape_string($conn, $response);

$sql = "INSERT INTO ContactForm (name, email, contacttype, response)
        VALUES ('$name', '$email', '$contacttype', '$response')";

if ($conn->query($sql) === TRUE) {
    echo "<p class='formresponse'>Your form was submitted successfully! Click <a href='contact.php'>here</a> to go back.</p>";
} else {
    echo "<p class='formresponse'>Error: " . $sql . "</p><br>" . $conn->error;
}

$conn->close();
?>