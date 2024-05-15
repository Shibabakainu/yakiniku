<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "yakiniku";

$connect = new mysqli($servername, $username, $password, $dbname);

if($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "INSERT INTO answer_comments (name, comment) VALUES ('$name', '$comment')";
if($connect->query($sql) === TRUE) {
    header("Location: answer.php");
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();

?>
