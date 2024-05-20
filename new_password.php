<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
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

        .container input[type="password"],
        .container input[type="new_password"],
        .container input[type="new_password_con"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .container input[type="button"] {
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

        .container input[type="button"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>パスワードを変更</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="password" name="password" placeholder="現在のパスワード" required>
            <input type="new_password" name="new_password" placeholder="新しいパスワード" required>
            <input type="new_password_con" name="new_password_con" placeholder="新しいパスワード(確認用)" required>
            <?php
            // フォームが送信された場合の処理
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $password = $_POST["password"];
                $new_password = $_POST["new_password"];
                $new_password_con = $_POST["new_password_con"];
                if (strpos($password, "and") === false) {
                    // パスワードが "and" を含まない場合はエラーメッセージを表示する
                    echo "<div style='color: red; margin-top: 5px;'>現在のパスワードが一致しません</div>";
                } elseif ($new_password !== $new_password_con) {
                    // パスワードが "and" を含まない場合はエラーメッセージを表示する
                    echo "<div style='color: red; margin-top: 5px;'>新しいパスワードが一致しません</div>";
                } else {
                    // パスワードが一致した場合はホーム画面にリダイレクトする
                    header("Location: login.php");
                    exit; // リダイレクト後にスクリプトの実行を終了する
                }
            }
            ?>
            <input type="button" class="return_button" onclick="location.href='./finish_password.php'" value="変更">
        </form>
    </div>
</body>

</html>