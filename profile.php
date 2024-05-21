<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<?php
require_once __DIR__ . '/newNav.php'; // ルートディレクトリからの相対パスでnav.phpを読み込む
?>

<head>
    <meta charset="UTF-8">
    <title>マイプロフィール</title>
    <style>
        img.profile_image {
            max-width: 200px;
            /* 最大幅を設定 */
            max-height: 200px;
            /* 最大高さを設定 */
            width: 200px;
            /* 幅を自動調整:auto */
            height: 200px;
            /* 高さを自動調整:auto */
            object-fit: cover;
            /* 画像を保持し、アスペクト比を維持しつつ要素全体にスケーリング */
            border-radius: 50%;
            /* 円形にする */
        }

        body {
            margin-top: 50px;
            margin-bottom: 50px;
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

        .wrap {
            width: 80%;
            margin: auto;
            background-color: #c4e4f5;
            padding: 50px 0 0 30px;
            height: 100%;
        }

        .profile {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="wrap">
            <div class="profile">
            <?php
            include 'db_connect.php'; // Include the database connection script

            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
                $sql = "SELECT * FROM users WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    // Display user data
                    echo "<h1><font size=7>" . htmlspecialchars($user['name']) . "</font></h1>";
                    echo "<img src='profile/profileicon/" . htmlspecialchars($user['profile_image']) . "' alt='Profile Picture' class='profile_image'>";
                    echo "<p><font size=5><b>メール</b>: " . htmlspecialchars($user['email']) . "</font></p>";
                    echo "<p><font size=5><b>学科</b>: " . htmlspecialchars($user['course']) . "</font></p>";
                    echo "<p><font size=5><b>一言</b>: " . htmlspecialchars($user['singleword']) . "</font></p>";
                    echo "<p><font size=5><b>参加時点</b>: <font color=grey>" . htmlspecialchars($user['created_at']) . "</font></font></p>";
                } else {
                    echo "User not found.";
                }
                $stmt->close();
            } else {
                echo "No user ID specified.";
            }

            $conn->close();
            ?>

            <!-- 編集ボタンをユーザーのデータの下に配置 -->
            <a href='identification.php' class="edit_button">編集</a>
        </div>

    <br><br> <!-- ボタンとテーブルの間に適切な間隔を設定 -->

    <!-- 投稿作品一覧テーブル -->
    <p class="view_p">投稿作品一覧</p>
    <table border="1" style="border-collapse: collapse">
        <tr bgcolor="#e6e6fa">
            <td width="400px">タイトル</td>
            <td width="800px">作品の説明</td>
        </tr>
        <?php
        for ($i = 0; $i < 4; $i++) {
            if ($i % 2 == 0) {
                echo "<tr bgcolor=" . "#ffffff" .">";
                echo '<td><a href="./detail.php"><span style="color: black;">あいうえお</span></a></td>';   // タイトル
                echo "<th>あかさたなはまやらわ</th>";   // 作品詳細
                echo "</tr>";
            } else {
                echo "<tr bgcolor=" . "#f5f5f5" . ">";
                echo '<td><a href="./detail.php"><span style="color: black;">abcde</span></a></td>';    // タイトル
                echo "<th>abcdefghijklmn</th>"; // 作品詳細
                echo "</tr>";
            }
        }
        ?>
    </table>

    <p class="view_p">作成した質問一覧</p>
    <table border="1" style="border-collapse: collapse">
        <tr bgcolor="#e6e6fa">
            <td width="400px">タイトル</td>
            <td width="800px">質問の内容</td>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="Poster.php"><span style="color: black;">pythonの課題について</span></a></td>
            <th>
                辞書型がよくわかりません
            </th>
        </tr>
        <tr bgcolor="f5f5f5">
            <td><a href="question_detail.php"><span style="color: black;">「急募」就活の必勝法</span></a></td>
            <th>
                共に働けるイメージを沸かすしかないのでしょうか？
            </th>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="question_detail.php"><span style="color: black;">おすすめの本を教えてください</span></a></td>
            <th>
                おすすめの本を教えてください
            </th>
        </tr>
        <tr bgcolor="f5f5f5">
        <td><a href="question_detail.php"><span style="color: black;">AIに愛を教えたい</span></a></td>
        <th>
            どのような愛が適切だと思いますか？(恋愛、隣人愛等)
        </th>
        </tr>
    </table>
    </div>
</body>
<?php
require_once __DIR__ . '/footer.php';
?>

</html>
