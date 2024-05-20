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
<div id="goodCountButtonContainer"></div>

<?php
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

//コメント表示
$sql = "SELECT answer_comments.comment, users.email, users.name, users.id AS user_id, timestamp
        FROM answer_comments
        JOIN users ON answer_comments.user_id = users.id
        ORDER BY timestamp $order";
$result = $connect->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr class='target' data-id='" .$row['id']. "'>";
        echo    "<td>";       
        echo    "<img src='profile/profileicon/6628913fb7d1d.jpg' class='profile_image'>";            
        echo    "<p><strong><a href='profile.php?id=" . $row['user_id'] . "'>" . htmlspecialchars($row['name']) ."<br></p>";
        echo    "<p class='comment'>" . htmlspecialchars($row['comment']) . "</p>";                            
        require __DIR__ . '/GoodCountButtonDB.php';                
        echo    "<p class='time'>投稿日時: " . $row['timestamp'] . "</p>";
        echo "</td>";
    }
} else {
    echo " ";
}
        echo "</tr>";

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