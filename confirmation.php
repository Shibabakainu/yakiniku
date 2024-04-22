<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール確認</title>
    <style>
        img.profile_image {
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
    <h1>プロフィール確認</h1>
    <?php
    // フォームから送信されたデータを受け取る
    $name = $_POST['name'] ?? '';
    $course = $_POST['course'] ?? '';
    $singleword = $_POST['singleword'] ?? '';
    $email = $_POST['email'] ?? '';
    // 画像ファイルの処理
    $target_dir = "profileicon/"; // 画像を保存するディレクトリ:uploadsでフォルダを新規作成
    $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // ファイルを一時的な場所に移動して保存
    $temp_image = $_FILES['profile_image']['tmp_name'];
    $final_image = $target_dir . uniqid() . '.' . $imageFileType;
    move_uploaded_file($temp_image, $final_image);

    // 受け取ったデータを表示
    echo "<p><strong>名前:</strong> $name</p>";
    echo "<p><strong>学科:</strong> $course</p>";
    echo "<p><strong>一言:</strong> $singleword</p>";
    echo "<p><strong>メールアドレス:</strong> $email</p>";
    // 画像プレビューなども表示する場合はここで追加
    echo "<p><strong>プロフィール画像:</strong><br><img src='$final_image' class='profile_image'></p>";
    ?>
    <button onclick="location.href='result.php'">新規作成</button>

</body>

</html>
