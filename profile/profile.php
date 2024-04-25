<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール設定</title>
    <style>
        #profile_image_preview {
            max-width: 200px; /* 最大幅を設定 */
            max-height: 200px; /* 最大高さを設定 */
            width: 200px; /* 幅を自動調整:auto */
            height: 200px; /* 高さを自動調整:auto */
            object-fit: cover; /* 画像を保持し、アスペクト比を維持しつつ要素全体にスケーリング */
            border-radius: 50%; /* 円形にする */
            display: none; /* 初期状態では非表示 */
        }
        #passwordMismatch {
            color: red;
            margin-top: 5px;
            display: none;
        }
    </style>
</head>

<body>
    <h1>プロフィール設定</h1>
    <form id="profileForm" action="confirmation.php" method="post" enctype="multipart/form-data">
        <label for="profile_image">プロフィール画像:</label><br>
        <input type="file" accept=".jpg,.jpeg,.png,.gif" id="profile_image" name="profile_image" onchange="previewImage()"><br><br>
        <img id="profile_image_preview" src="#" alt="プロフィール画像プレビュー"><br><br>
        
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="course">学科:</label><br>
        <select id="course" name="course">
            <option value="ITエキスパート学科">ITエキスパート学科</option>
            <option value="ITスペシャリスト学科">ITスペシャリスト学科</option>
            <option value="情報処理学科">情報処理学科</option>
            <!-- 必要な学科を追加 -->
        </select><br><br>

        <label for="singleword">一言:</label><br>
        <input type="text" id="singleword" name="singleword"><br><br>

        <label for="email">メールアドレス:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="password">パスワード:</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <label for="confirm_password">パスワード再入力:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" oninput="checkPasswordMatch()"><br>
        <div id="passwordMismatch">パスワードが一致しません</div><br>

        <input type="submit" value="保存">
    </form>

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

        function checkPasswordMatch() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            var passwordMismatch = document.getElementById("passwordMismatch");

            if (password !== confirm_password) {
                passwordMismatch.style.display = 'block';
            } else {
                passwordMismatch.style.display = 'none';
            }
        }

        document.getElementById("profileForm").addEventListener("submit", function(event) {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;

            if (password !== confirm_password) {
                event.preventDefault(); // フォームの送信をキャンセル
                document.getElementById("passwordMismatch").style.display = 'block';
            }
        });
    </script>
</body>

</html>
