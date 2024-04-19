
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .container h2 {
            text-align: center;
        }
        .container input[type="text"],
        .container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            box-sizing: border-box;
            border: none;
            border-radius: 3px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .container a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #007bff;
        }
        .container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>新規登録画面</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="username" placeholder="ID" required>
            <input type="password" name="password" placeholder="パスワード" required>
            <input type="password" name="confirm_password" placeholder="パスワード再入力" required>
            <?php
            // フォームが送信されたかどうかを確認する
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // POSTデータからユーザー名とパスワードを取得する
                $username = $_POST["username"];
                $password = $_POST["password"];
                $confirm_password = $_POST["confirm_password"];

                // パスワードが一致するかどうかを確認する
                if ($password !== $confirm_password) {
                    // パスワードが一致しない場合はエラーメッセージを表示する
                    echo "<div style='color: red; margin-top: 5px;'>パスワードが一致しません</div>";
                } else {
                    // パスワードが一致した場合はリザルト画面にリダイレクトする
                    header("Location: result.php");
                    exit; // リダイレクト後にスクリプトの実行を終了する
                }
            }
?>
            <input type="submit" value="新規登録">
            <a href="login.php">ログインページへ戻る</a>
        </form>
    </div>
    
</body>
</html>
