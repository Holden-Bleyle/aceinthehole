<?php
/*Action page for the contact form; places the contents into the mySQL database.*/
$servername = "localhost";
$username = "holdenbl_01";
$password = "2eR6x93fff";
$dbname = "holdenbl_aceinthehole";

print_r($name);

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Oops! Your connection didn't hit the ground running. Try resubmitting?");
}

/*Retrieve the POST data*/
$name = $_POST['name'];
$email = $_POST['email'];
$interest = $_POST['reason'];

$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$interest = mysqli_real_escape_string($conn, $interest);

$sql = "INSERT INTO ContactForm (name, email, interest)
        VALUES ('$name', '$email', '$interest')";

if ($conn->query($sql) === TRUE) {
    echo "Your form was submitted successfully! Click <a href='contact.php'>here</a> to go back.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>