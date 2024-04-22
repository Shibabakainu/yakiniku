<!DOCTYPE html>
<html lang="ja">
<?php
require_once __DIR__ . '/nav.php';
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
    </style>
    </head>
<body>
    <?php
    // ユーザーのデータ（仮のデータ）
    $name = "ジョリーパスタ";
    $course = "ITエキスパート学科";
    $singleword = "コロナは風と共に去りぬ";
    $icon_path = "profileicon/6625c9866671f.jpg"; // アイコンの画像パス

    // ユーザーのデータを表示
    echo "<p><strong>アイコン:</strong><br><img src='$icon_path' class='profile_image'></p>";
    echo "<p><strong>名前:</strong> $name</p>";
    echo "<p><strong>学科:</strong> $course</p>";
    echo "<p><strong>一言:</strong> $singleword</p>";
    ?>
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
