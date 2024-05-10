<?php
// デフォルトの画像パス
$default_icon_path = "profile/profileicon/6625c9866671f.jpg";

// フォームから送信されたデータを受け取る
$name = $_POST['name'] ?? '';
$singleword = $_POST['singleword'] ?? '';

// フォームから送信された画像のファイルがあるかどうかを確認
if(isset($_FILES["profile_image"]["tmp_name"]) && $_FILES["profile_image"]["tmp_name"] !== "") {
    // アップロードされた画像のパスを取得
    $temp_image = $_FILES["profile_image"]["tmp_name"];

    // 画像ファイルの処理
    $target_dir = "changeprofile/"; // 画像を保存するディレクトリ
    $imageFileType = strtolower(pathinfo($_FILES["profile_image"]["name"], PATHINFO_EXTENSION));

    // ファイル名を一意にするための新しい名前を生成
    $new_image_name = uniqid() . '.' . $imageFileType;

    // 画像を移動して保存
    $final_image = $target_dir . $new_image_name;
    move_uploaded_file($temp_image, $final_image);

    // 画像のURLを生成
    $icon_path = $final_image;
} else {
    // フォームから送信された画像のファイルがない場合は、元の画像のパスを使用する
    $icon_path = $_POST['icon_path'] ?? $default_icon_path; // 元の画像のパスを取得、デフォルトのパスを使用する
}
?>

<!DOCTYPE html>
<html lang="ja">
<?php require_once __DIR__ . '/newnav.php'; // ナビゲーションバーのインクルード ?>
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
    // 受け取ったデータを表示
    echo "<p><strong>プロフィール画像:</strong><br><img src='$icon_path' class='profile_update'></p>";
    echo "<p><strong>名前:</strong> $name</p>";
    echo "<p><strong>一言:</strong> $singleword</p>";
    ?>
    <form action="demoprofile.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="singleword" value="<?php echo $singleword; ?>">
        <input type="hidden" name="icon_path" value="<?php echo $icon_path; ?>">
        <!-- 元の画像パスを送信するためのhiddenフィールドを追加 -->
        <input type="hidden" name="original_icon_path" value="<?php echo $_POST['original_icon_path'] ?? ''; ?>">
        <input type="file" accept=".jpg,.jpeg,.png,.gif" id="profile_image" name="profile_image" style="display: none;">
        <input type="submit" value="送信">
    </form>
</div>
</body>
<?php
require_once __DIR__ . '/footer.php';
?>
</html>
