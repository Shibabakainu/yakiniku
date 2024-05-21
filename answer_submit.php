<?php
require_once __DIR__ . '/newNav.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>回答入力</title>
    <link rel="stylesheet" href="styles/answer_submit.css">
</head>

<body>
    <div class="wrap">
        <form method="post" action="answer_comments_submit.php">
            <h1>回答入力</h1>
            <h4>氏名</h4>
            <input type="text" name="name" size="25" required>
            <h4>回答の内容を入力</h4>
            <textarea name="comment" maxlength="150" required></textarea>
            <h4>画像のアップロード</h4>
            <input type="file" accept=".jpg, .png">
            <h4>ファイルのアップロード</h4>
            <input type="file"><br>
            <button type="submit" class="answer_button" onclick="location.href='./answer.php'" >回答する</button>
            <?php
            include 'db_connect.php'; 
            session_start();
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
                $comment = $_POST['comment'];
            
                $sql = "INSERT INTO comments (user_id, comment) VALUES ('$user_id', '$comment')";
                if ($conn->query($sql) === TRUE) {
                    header("Location: detail.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "You must be logged in to comment.";
            }            
            ?>
        </form>
    </div>
</body>

<?php
require_once __DIR__ . '/footer.php';
?>