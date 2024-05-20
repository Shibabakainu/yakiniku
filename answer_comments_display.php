<link rel="stylesheet" href="styles/GoodCountButtonDB.css"> <!-- GoodCountButton.cssを読み込む -->
<script>
    // 順序を変更する関数
    function changeOrder(order) {
        var form = document.getElementById("orderForm");
        form.order.value = order;
        form.submit();
    }
</script>
<form id="orderForm">
    <input type="radio" name="order" value="asc" onchange="changeOrder('asc')"> 古い順
    <input type="radio" name="order" value="desc" onchange="changeOrder('desc')"> 新しい順
</form>
<div id="goodCountButtonContainer"></div>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "yakiniku";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$order = isset($_GET['order']) ? $_GET['order'] : 'asc';

$sql = "SELECT id, name, comment, timestamp FROM answer_comments ORDER BY timestamp $order";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr class='target' data-id='" . $row['id'] . "'>";
        echo    "<td>";
        echo    "<img src='profile/profileicon/6628913fb7d1d.jpg' class='profile_image'>";
        echo    "<p class='name'>" . htmlspecialchars($row['name']) . "<br></p>";
        echo    "<p class='comment'>" . htmlspecialchars($row['comment']) . "</p>";
        require __DIR__ . '/GoodCountButtonDB.php';
        echo    "<p class='time'>投稿日時: " . $row['timestamp'] . "</p>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo " ";
}

$connect->close();
?>

<link rel="stylesheet" href="styles/icon.css">
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // アイコンがクリックされたときの処理
        document.querySelectorAll('.icon img.profile_image').forEach(icon => {
            icon.addEventListener('click', function() {
                const commentId = this.parentElement.getAttribute('data-id');
                window.location.href = 'demo_otherprofile.php?id=' + commentId;
            });
        });

        // いいねボタンの処理
        document.querySelectorAll('.likeButton').forEach(button => {
            let likeCountSpan = button.querySelector('.likeCount');
            button.addEventListener('click', function() {
                let currentCount = parseInt(likeCountSpan.textContent);
                if (likeCountSpan.classList.contains('liked')) {
                    likeCountSpan.classList.remove('liked');
                    currentCount--;
                } else {
                    currentCount++;
                    likeCountSpan.classList.add('liked');
                }
                likeCountSpan.textContent = currentCount;
            });
        });
    });
</script>
