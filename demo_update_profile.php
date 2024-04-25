<!DOCTYPE html>
<html lang="ja">
<?php
require_once __DIR__ . '/nav.php'; // ナビゲーションバーのインクルード
?>
<head>
    <meta charset="UTF-8">
    <title>プロフィール確認画面</title>
    <style>
        /* スタイリングは必要に応じて追加してください */
        body {
            margin-top: 50px;
            margin-left: 0px;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        img.profile_update {
            max-width: 200px; /* 最大幅を設定 */
            max-height: 200px; /* 最大高さを設定 */
            width: 200px; /* 幅を自動調整:auto */
            height: 200px; /* 高さを自動調整:auto */
            object-fit: cover; /* 画像を保持し、アスペクト比を維持しつつ要素全体にスケーリング */
            border-radius: 50%; /* 円形にする */
        }
    </style>
</head>
<body>
    <h2>以下の内容で変更します</h2>
    <div class="container">
        <?php
        // フォームから送信されたデータを受け取る
        $name = $_POST['name'] ?? '';
        $singleword = $_POST['singleword'] ?? '';

        // アップロードされた画像のパスを取得
        $icon_path = $_FILES["profile_image"]["name"] ?? '';
        // 画像ファイルの処理
        if(isset($_FILES["profile_image"]["tmp_name"])) {
            // 一時ファイルから画像を読み込み
            $icon_path = $_FILES["profile_image"]["tmp_name"];
        }
        
        // 画像ファイルの処理
        $target_dir = "changeprofile/"; // 画像を保存するディレクトリ
        $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // ファイルを一時的な場所に移動して保存
        $temp_image = $_FILES['profile_image']['tmp_name'];
        $final_image = $target_dir . uniqid() . '.' . $imageFileType;
        move_uploaded_file($temp_image, $final_image);

        // 受け取ったデータを表示
        echo "<p><strong>プロフィール画像:</strong><br><img src='$final_image' class='profile_update'></p>";
        echo "<p><strong>名前:</strong> $name</p>";
        echo "<p><strong>一言:</strong> $singleword</p>";
        ?>
        <form action="demoprofile.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="singleword" value="<?php echo $singleword; ?>">
            <input type="hidden" name="icon_path" value="<?php echo $final_image; ?>">
            <input type="file" accept=".jpg,.jpeg,.png,.gif" id="profile_image" name="profile_image" style="display: none;">
            <input type="submit" value="送信">
        </form>
    </div>
</body>
</html>
