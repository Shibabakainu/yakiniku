<?php
require_once __DIR__ . '/newNav.php';
?>

<!DOCTYPE html>
<html lang="ja">


<head>
    <title>投稿者質問詳細</title>
    <link rel="stylesheet" href="styles/Poster.css">
</head>
<style>
    body {
        margin-top: 50px;
        margin-bottom: 50px;
        margin-left: 0px;
        padding: 0;
    }
    .wrap {
        width: 80%;
        margin: auto;
        background-color: #c4e4f5;
        padding: 50px 0 0 30px;
        height: 100%;
    }
</style>

<body>
    <div class="wrap">

    <h2 class="poster_h2">pythonの課題について</h2>
    <h3>回答一覧</h3>

    <div class="targets">
        <table border="1" style="border-collapse: collapse">
            <tr bgcolor="#f5f5f5" class="target" data-category="C">
                <td>
                    <img src="images/ebi.jpeg" class='profile_image'>
                    <p class="main">限りなくエビ<br>こんなやり方はどうでしょう。........</p>
                    <?php
                    require __DIR__ . '/bestanswer_button.php';
                    ?>
                </td>
            </tr>
            <tr bgcolor="#f5f5f5" class="target" data-category="AI">
                <td>
                    <img src="profile\profileicon\662b12c596ba3.jpg" class='profile_image'>
                    <p class="main">石より硬い岸本<br>私はこの方法で解決しました。........</p>
                    <?php
                    require __DIR__ . '/bestanswer_button.php';
                    ?>
                </td>
            </tr>
            <tr bgcolor="#f5f5f5" class="target" data-category="AI">
                <td>
                    <img src="profile/profileicon/6628913fb7d1d.jpg" class='profile_image'>
                    <p class="main">灰色の仏像<br>むずかしいですよね。私は、........</p>
                    <?php
                    require __DIR__ . '/bestanswer_button.php';
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <input type="button" class="return_button" onclick="location.href='./demoprofile.php'" value="戻る">

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

</html>