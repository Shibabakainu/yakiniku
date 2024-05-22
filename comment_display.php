<style>
.name {
        font-size: 18px; /* フォントサイズを変更 */
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
    include 'db_connect.php'; 
    //$order = $_GET['order']; // JavaScriptから渡される選択された順序
    $order = isset($_GET['order']) ? $_GET['order'] : 'asc';
    $sql = "SELECT id, name, comment, timestamp FROM comments ORDER BY timestamp $order";
    $result = $conn->query($sql);
    //コメント表示
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='comment'>";
            echo "<span class='name'>" . htmlspecialchars($row['name']) . "</span><br><div class='comment-text' style='margin-left: 29px;'>" . htmlspecialchars($row['comment']) . "</div><small>投稿日時: " . $row['timestamp'] . "</small>";
            echo "</div>";
        }
    } else {
        echo "まだコメントはありません。";
    }
    echo "</div>";

    $conn->close();
?>
