<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール設定</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .wrap {
            width: 80%;
            margin: auto;
            padding: 1px 0 50px 30px;
            background-color: #c4e4f5;
            height: 100%;
        }

        #profile_image_preview {
            max-width: 200px;
            max-height: 200px;
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            display: none;
        }

        #passwordMismatch {
            color: red;
            margin-top: 5px;
            display: none;
        }

        #customAlert {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: white;
            border: 1px solid #000;
            z-index: 1000;
            text-align: center;
        }

        #customAlert button {
            margin: 10px;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 500;
        }
    </style>
</head>

<body>
    <div class="wrap">
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

            <input type="button" value="作成" onclick="showCustomAlert()">
        </form>
    </div>

    <div id="overlay"></div>
    <div id="customAlert">
        <p>この内容で作成しますか？</p>
        <button id="confirmButton">はい</button>
        <button id="cancelButton">いいえ</button>
    </div>

    <script>
        function previewImage() {
            var fileInput = document.getElementById('profile_image');
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('profile_image_preview');
                output.src = reader.result;
                output.style.display = 'block';
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

        function showCustomAlert() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;

            if (password !== confirm_password) {
                document.getElementById("passwordMismatch").style.display = 'block';
                return;
            }

            document.getElementById('overlay').style.display = 'block';
            document.getElementById('customAlert').style.display = 'block';
        }

        function closeCustomAlert() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('customAlert').style.display = 'none';
        }

        function confirmSubmission() {
            document.getElementById('profileForm').submit();
        }

        document.getElementById("confirmButton").addEventListener("click", confirmSubmission);
        document.getElementById("cancelButton").addEventListener("click", closeCustomAlert);
    </script>
</body>

</html>
