<?php
/*Action page for the registration form; places the contents into the mySQL database.*/
$servername = "localhost";
$username = "holdenbl_01";
$password = "Reversefold1";
$dbname = "holdenbl_aceinthehole";

print_r($name);

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("<p class='formresponse'>Oops! Your connection didn't hit the ground running. Try resubmitting?</p>");
}

/*Retrieve the POST data*/
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$emgname = $_POST['emgname'];
$emgphone = $_POST['emgphone'];
$satevent = $_POST['satevent'];
$sunevent = $_POST['sunevent'];

$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$phone = mysqli_real_escape_string($conn, $phone);  
$emgname = mysqli_real_escape_string($conn, $emgname);
$emgphone =  mysqli_real_escape_string($conn, $emgphone);
$satevent = mysqli_real_escape_string($conn, $satevent);
$sunevent = mysqli_real_escape_string($conn, $sunevent);

$sql = "INSERT INTO RegistrationForm (name, email, phone, emgname, emgphone, satevent, sunevent)
        VALUES ('$name', '$email', '$phone', '$emgname', '$emgphone', '$satevent', '$sunevent')";

if ($conn->query($sql) === TRUE) {
    echo "<p class='formresponse'>Your form was submitted successfully! Click <a href='registration.php'>here</a> to go back.</p>";
} else {
    echo "<p class='formresponse'>Error: " . $sql . "</p><br>" . $conn->error;
}

$conn->close();
?>