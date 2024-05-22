<?php
session_start(); // セッションを開始します（必要に応じて）

require_once __DIR__ . '/newnav.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    if (strpos($password, "and") === false) {
        $error_message = "パスワードが一致しません";
    } else {
        // パスワードが一致した場合は編集画面へリダイレクトする
        header("Location: demo_edit_profile.php");
        exit; // リダイレクト後にスクリプトの実行を終了する
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <style>
        body {
            margin-top: 50px;
            margin-left: 0px;
            padding: 0;
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
        .error {
            color: red;
            margin-top: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>本人確認/パスワードを入力してください</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="password" name="password" placeholder="パスワード" required>
            <?php
            if (isset($error_message)) {
                echo "<div class='error'>$error_message</div>";
            }
            ?>
            <input type="submit" value="ログイン">
        </form>
    </div>
</body>
</html>
