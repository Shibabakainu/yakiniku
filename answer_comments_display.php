
<link rel="stylesheet" href="styles/GoodCountButtonDB.css"> <!-- GoodCountButton.cssを読み込む -->
<link rel="stylesheet" href="styles/answer_comments_display.css">
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
    include 'db_connect.php';

    $order = isset($_GET['order']) ? $_GET['order'] : 'asc';


    //コメント表示
    $sql = "SELECT answer_comments.comment, users.profile_image, users.email, users.name, users.id AS user_id, timestamp
            FROM answer_comments
            JOIN users ON answer_comments.user_id = users.id
            ORDER BY timestamp $order";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr class='target' bgcolor='#ffffff' data-id='" . $row['user_id'] . "'>";
            echo    "<td>";
            echo    "<img src='profile/profileicon/" . htmlspecialchars($row['profile_image']) . "' class='profile_image'>";
            echo    "<p class=comment><strong><a href='profile.php?id=" . $row['user_id'] . "'>" . htmlspecialchars($row['name']) . "</a></strong></p>";
            echo    "<p class='comment'>" . htmlspecialchars($row['comment']) . "</p>";
            require __DIR__ . '/GoodCountButtonDB.php';
            echo    "<p class='time'>投稿日時: " . $row['timestamp'] . "</p>";
            echo    "</td>";
            echo "</tr>";
        }
    } else {
        echo "No comments found.";
    }

    $conn->close();
?>

<link rel="stylesheet" href="styles/icon.css">
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // いいねボタンの処理
        document.querySelectorAll('.likeButton').forEach(button => {
            let likeCountSpan = button.querySelector('.likeCount');
            button.addEventListener('click', function() {
                let currentCount = parseInt(likeCountSpan.textContent);
                if (button.classList.contains('liked')) {
                    button.classList.remove('liked');
                    currentCount--;
                } else {
                    button.classList.add('liked');
                    currentCount++;
                }
                likeCountSpan.textContent = currentCount;
            });
        });
    });
</script>
