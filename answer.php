<?php
require_once __DIR__ . '/newNav.php';
?>

<!DOCTYPE html>
<html lang="ja">


<head>
    <title>閲覧者質問詳細</title>
    <link rel="stylesheet" href="styles/answer.css">
</head>

<body>
    <div class="wrap">
    <h1 class="h1">C言語のループ処理について</h1>
    <td>
        <img src="profile/profileicon/6625c9866671f.jpg" class='profile_icon'>
        <p class="icon">ジョリーパスタ<br></p>
        <p class="day">2024/05/08<br></p>
    </td>
    <div class="box">
        <p class="text">
            C言語でループ処理を書こうとしているのですが、なかなかうまくいきません<br>
            条件文を書いても、ループが思った通りに動かないし、何か間違ってる気がするのですが、どこが悪いのかわかりません。<br>
            どこが間違っているか教えて下さい。<br>
        </p>
    </div>
    <img src="images/c_miss - コピー.jpg" class="image" alt="ここに画像が表示されます"><br>

    <h2 class="h2">ベストアンサー</h2>
    <td>
        <img src="images/best.jpeg" class='profile_icon'>
        <p class="icon_2">C言語マスター<br></p>
        <p class="day">2024/05/10<br></p>
    </td>
    <div class="box2">
        <p class="text">
            むずかしいですよね。<br>
            iの値に注目してください。このままでは、iを更新していないため、無限ループになってしまいます。<br>
            printfのコードの後に「i++」を追加してください。これによってループ処理の実行のたびにiの値が更新され、<br>
            iの値が５になった時点で処理が終了します。<br>
            写真も貼って置くので、試してみてください。<br>
        </p>
    </div>
    <img src="images/c_ok - コピー.jpg" class="image" alt="ここに画像が表示されます"><br>

    <h2 class="h2">回答一覧</h2>

    <div class="targets">
        <table border="1" style="border-collapse: collapse">
            <tr class="target" bgcolor="#ffffff">
                <td>
                    <img src="profile/profileicon/6628913fb7d1d.jpg" class='profile_image'>
                    <p class="main">灰色の仏像<br></p>
                    <p class="main">こんなやり方はどうでしょう。........</p>
                    <?php
                        require __DIR__ . '/GoodCountButton1.php';
                    ?>
                    <p class="time">投稿日時: 2024-05-01 13:23:52</p>
                </td>
            </tr>
            <tr class="target" bgcolor="#ffffff">
                <td>
                    <img src="profile\profileicon\662b12c596ba3.jpg" class='profile_image'>
                    <p class="main">石より硬い岸本<br>私はこの方法で解決しました。........</p>
                    <?php
                        require __DIR__ . '/GoodCountButton2.php';
                    ?>
                    <p class="time">投稿日時: 2024-05-02 11:14:22</p>
                </td>
            </tr>
            <tr class="target" bgcolor="#ffffff">
                <td>
                    <img src="images/ebi.jpeg" class='profile_image'>
                    <p class="main">限りなくエビ<br>私も苦手です。........</p>
                    <?php
                        require __DIR__ . '/GoodCountButton3.php';
                    ?>
                    <p class="time">投稿日時: 2024-05-03 16:12:36</p>
                </td>
            </tr>
            <?php include 'answer_comments_display.php'; ?>
        </table>
    </div>

    <input type="button" class="answer_button" onclick="location.href='./answer_submit.php'" value="回答する">

    <script>
        // アイコンがクリックされたときの処理
        document.querySelectorAll('.profile_image').forEach(icon => {
            icon.addEventListener('click', function() {
                const commentId = this.parentElement.getAttribute('data-id');
                window.location.href = 'demo_otherprofile.php?id=' + commentId;
            });
        });
    </script>
    </div>
</body>



<?php
require_once __DIR__ . '/footer.php';
?>
