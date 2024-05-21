<?php
include 'db_connect.php'; 

$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "INSERT INTO answer_comments (name, comment) VALUES ('$name', '$comment')";
if($conn->query($sql) === TRUE) {
    header("Location: answer.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
