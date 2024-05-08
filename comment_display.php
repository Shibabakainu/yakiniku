<style>
.comment small {
    display: block;
    margin-top: 5px;
    font-size: 12px;
    color: #666;
}
</style>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "yakiniku";

$connect = new mysqli($servername, $username, $password, $dbname);

if($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$sql = "SELECT id, name, comment, timestamp FROM comments ORDER BY id DESC";
$result = $connect->query($sql);

//コメント表示
echo "<span class='icon' data-id='" . "'><img src='profile/profileicon/662b12c596ba3.jpg' class='profile_image' alt='icon'></span>" . "石より硬い岸本" . ":</strong>" . "いいね" . "</p>";
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='comment'>";
        echo "<span class='icon' data-id='" . $row['id'] . "'><img src='profile/profileicon/6625c9866671f.jpg' class='profile_image' alt='icon'></span>" . htmlspecialchars($row['name']) . "<br><div class='comment-text' style='margin-left: 29px;'>" . htmlspecialchars($row['comment']) . "</div><small>投稿日時: " . $row['timestamp'] . "</small>";
        echo "</div>";
    }
} else {
    echo "まだコメントはありません。";
}
echo "</div>";

$connect->close();
?>
<link rel="stylesheet" href="styles/icon.css">
<script>
    // アイコンがクリックされたときの処理
    document.querySelectorAll('.icon img.profile_image').forEach(icon => {
        icon.addEventListener('click', function() {
            const commentId = this.parentElement.getAttribute('data-id');
            window.location.href = 'demo_otherprofile.php?id=' + commentId;
        });
    });
</script>
