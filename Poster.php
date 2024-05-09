<?php
require_once __DIR__ . '/newNav.php';
?>

<!DOCTYPE html>
<html lang="ja">


<head>
    <title>投稿者質問詳細</title>
    <link rel="stylesheet" href="styles/Poster.css">
</head>

<body>


    <h2 class="poster_h2">pythonの課題について</h2>
    <p>回答一覧</p>

    <div class="targets">
        <table border="1" style="border-collapse: collapse">
            <tr class="target" data-category="C">
                <td>
                    <a href="./demoprofile.php"></a><img src="profile/profileicon/6625c9866671f.jpg" class='profile_image'>
                    <p class="main">ジョリーパスタ<br>こんなやり方はどうでしょう。........</p>
                </td>
            </tr>
            <tr bgcolor="#f5f5f5" class="target" data-category="AI">
                <td>
                    <img src="profile\profileicon\662b12c596ba3.jpg" class='profile_image'>
                    <p class="main">石より硬い岸本<br>私はこの方法で解決しました。........</p>
                </td>
            </tr>
            <tr bgcolor="#f5f5f5" class="target" data-category="AI">
                <td>
                    <img src="profile/profileicon/6628913fb7d1d.jpg" class='profile_image'>
                    <p class="main">灰色の仏像<br>むずかしいですよね。私は、........</p>
                </td>
            </tr>
        </table>
    </div>

    <input type="button" class="return_button" onclick="location.href='./view.php'" value="戻る">

    <script>
        // アイコンがクリックされたときの処理
        document.querySelectorAll('.icon img.profile_image').forEach(icon => {
            icon.addEventListener('click', function() {
                const commentId = this.parentElement.getAttribute('data-id');
                window.location.href = 'demo_otherprofile.php?id=' + commentId;
            });
        });
    </script>



</body>

</html>

<?php
require_once __DIR__ . '/footer.php';
?>