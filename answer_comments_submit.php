<?php
include 'db_connect.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $comment = $_POST['comment'];
    
    $sql = "INSERT INTO answer_comments (user_id, comment) VALUES ('$user_id', '$comment')";
    if ($conn->query($sql) === TRUE) {
        header("Location: answer.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "You must be logged in to comment.";
}

$conn->close();
?>
