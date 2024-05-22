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
        <?php include 'answer_comments_display.php'; ?>

        </table>
    </div>

    <input type="button" class="answer_button" onclick="location.href='./answer_submit.php'" value="回答する">

    </div>
</body>



<?php
require_once __DIR__ . '/footer.php';
?>
