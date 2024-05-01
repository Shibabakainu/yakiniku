<!DOCTYPE html>
<html lang="ja">
<?php
require_once __DIR__ . '/nav.php'; // ナビゲーションバーのインクルード
?>
<head>
    <meta charset="UTF-8">
    <title>プロフィール編集</title>
    <style>
        /* スタイリングは必要に応じて追加してください */
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
        #profile_image_preview {
            max-width: 200px; /* 最大幅を設定 */
            max-height: 200px; /* 最大高さを設定 */
            width: 200px; /* 幅を自動調整:auto */
            height: 200px; /* 高さを自動調整:auto */
            object-fit: cover; /* 画像を保持し、アスペクト比を維持しつつ要素全体にスケーリング */
            border-radius: 50%; /* 円形にする */
            display: block; /* 初期状態では非表示 */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>プロフィール編集</h2>
        <form id="profileForm" action="demo_update_profile.php" method="post" enctype="multipart/form-data">
            <?php
            // ユーザーのデータ（仮のデータ）
            $name = "ジョリーパスタ";
            $singleword = "コロナは風と共に去りぬ";
            $icon_path = "profile/profileicon/6625c9866671f.jpg"; // アイコンの画像パス

            // ユーザーのデータを表示
            echo "<label for='profile_image'>プロフィール画像:</label><br>";
            echo "<input type='file' accept='.jpg,.jpeg,.png,.gif' id='profile_image' name='profile_image' onchange='previewImage()'><br><br>";
            echo "<img id='profile_image_preview' src='$icon_path' alt='プロフィール画像プレビュー'><br><br>";

            echo "<label for='name'>名前:</label><br>";
            echo "<input type='text' id='name' name='name' value='$name'><br><br>";

            echo "<label for='singleword'>一言:</label><br>";
            echo "<input type='text' id='singleword' name='singleword' value='$singleword'><br><br>";

            echo "<input type='hidden' id='original_icon_path' name='original_icon_path' value='$icon_path'>"; // 元の画像パスを送信

            ?>
            <input type="submit" value="保存">
        </form>
    </div>
    <script>
        function previewImage() {
            var fileInput = document.getElementById('profile_image');
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('profile_image_preview');
                output.src = reader.result;
                output.style.display = 'block'; // 画像が選択されたら表示する
            }
            reader.readAsDataURL(fileInput.files[0]);
        }
    </script>
</body>
</html>