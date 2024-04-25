<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "yakiniku";

$connect = new mysqli($servername, $username, $password, $dbname);

if($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$sql = "SELECT name, comment FROM comments ORDER BY id DESC";
$result = $connect->query($sql);

//コメント表示
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>" . htmlspecialchars($row['name']) . ":</strong>" . htmlspecialchars($row['comment']) . "</p>";
    }
} else {
    echo "まだコメントはありません。";
}

$connect->close();

?>