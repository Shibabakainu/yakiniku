<style>
.name {
        font-size: 12px; /* フォントサイズを変更 */
        font-weight: bold;
    }
.comment small {
    display: block;
    margin-top: 5px;
    font-size: 12px;
    color: #666;
}
body{
    margin-bottom: 50px;
}
</style>
<script>
    // 順序を変更する関数
    function changeOrder(order) {
        // フォームを取得
        var form = document.getElementById("orderForm");
        // ラジオボタンの選択状態を更新
        form.order.value = order;
        // フォームを送信
        form.submit();
    }
</script>

<form id="orderForm">
    <input type="radio" name="order" value="asc" onchange="changeOrder('asc')"> 古い順
    <input type="radio" name="order" value="desc" onchange="changeOrder('desc')"> 新しい順
</form>
<?php
// 選択された順序に基づいてSQLクエリを作成し、コメントを表示する
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "yakiniku";
$connect = new mysqli($servername, $username, $password, $dbname);

if($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
//$order = $_GET['order']; // JavaScriptから渡される選択された順序
$order = isset($_GET['order']) ? $_GET['order'] : 'asc';
$sql = "SELECT id, name, comment, timestamp FROM comments ORDER BY timestamp $order";
$result = $connect->query($sql);
//コメント表示
//echo "<span class='icon' data-id='" . "'><img src='profile/profileicon/662b12c596ba3.jpg' class='profile_image' alt='icon'></span>" . "石より硬い岸本" . "<br><div class='comment-text' style='margin-left: 29px;'>" . "いいね" . "</div><small>投稿日時: " . "demo-de-mo de:mo:00" . "</small>";
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='comment'>";
        echo "<span class='icon' data-id='" . $row['id'] . "'><img src='profile/profileicon/6625c9866671f.jpg' class='profile_image' alt='icon'></span>" . "<span class='name'>" . htmlspecialchars($row['name']) . "</span><br><div class='comment-text' style='margin-left: 29px;'>" . htmlspecialchars($row['comment']) . "</div><small>投稿日時: " . $row['timestamp'] . "</small>";
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
