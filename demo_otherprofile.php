<!DOCTYPE html>
<html lang="ja">
<?php
require_once __DIR__ . '/nav.php'; // ルートディレクトリからの相対パスでnav.phpを読み込む
?>
<head>
    <meta charset="UTF-8">
    <title>マイプロフィール</title>
    <style>
        img.profile_image {
            max-width: 200px; /* 最大幅を設定 */
            max-height: 200px; /* 最大高さを設定 */
            width: 200px; /* 幅を自動調整:auto */
            height: 200px; /* 高さを自動調整:auto */
            object-fit: cover; /* 画像を保持し、アスペクト比を維持しつつ要素全体にスケーリング */
            border-radius: 50%; /* 円形にする */
        }

        body {
            margin-top: 50px;
            margin-left: 0px;
            padding: 0;
        }

        .edit_button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            
            cursor: pointer;
            border-radius: 12px;
        }
    </style>
</head>
<body>
<?php
    // フォームからの送信があるかどうかをチェック
    if(isset($_POST['name']) && isset($_POST['singleword']) && isset($_POST['icon_path'])) {
        // フォームからの送信がある場合は送信されたデータを表示
        $name = $_POST['name'];
        $course = "ITエキスパート学科";
        $singleword = $_POST['singleword'];
        $icon_path = $_POST['icon_path'];
    } else {
        // フォームからの送信がない場合は仮のデータを表示
        $name = "石より硬い岸本";
        $course = "ITスペシャリスト学科";
        $singleword = "リメンバーミー";
        $icon_path = "profile/profileicon/662b12c596ba3.jpg"; // アイコンの画像パス
    }

// ユーザーのデータを表示
echo "<p><strong>アイコン:</strong><br><img src='$icon_path' class='profile_image'></p>";
echo "<p><strong>名前:</strong> $name</p>";
echo "<p><strong>学科:</strong> $course</p>";
echo "<p><strong>一言:</strong> $singleword</p>";
?>
<br><br> <!-- ボタンとテーブルの間に適切な間隔を設定 -->

<!-- 投稿作品一覧テーブル -->
<p class="view_p">投稿作品一覧</p>
<table border="1" style="border-collapse: collapse">
    <tr bgcolor="#e6e6fa">
        <td width="400px">タイトル</td>
        <td width="800px">作品の説明</td>
    </tr>
    <?php
        for($i=0; $i<4; $i++){
            if($i % 2 == 0){
                echo "<tr>";
                echo '<td><a href="./detail.php"><span style="color: black;">あいうえお</span></a></td>';   // タイトル
                echo "<th>あかさたなはまやらわ</th>";   // 作品詳細
                echo "</tr>";
            }else{
                echo "<tr bgcolor="."#f5f5f5".">";
                echo '<td><a href="./detail.php"><span style="color: black;">abcde</span></a></td>';    // タイトル
                echo "<th>abcdefghijklmn</th>"; // 作品詳細
                echo "</tr>";
            }
        }
    ?>
</table>

</body>
</html>
