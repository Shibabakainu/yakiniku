<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="styles/newNav.css">

</head>
<body class="nav_body">
    <nav>
        <ul>
            <li><a href="home.php"><span class="material-symbols-outlined">home</span>ホーム</a></li>
            <li><a href="demoprofile.php"><span class="material-symbols-outlined">account_circle</span>プロフィール</a></li>
            <li><a href="view.php"><span class="material-symbols-outlined">preview</span>記事の閲覧</a></li>
            <li><a href="question_list.php"><span class="material-symbols-outlined">quick_reference_all</span>質問の閲覧</a></li>
            <li><a href="upload.php"><span class="material-symbols-outlined">drive_folder_upload</span>記事を作成</a></li>
            <li><a href="question.php"><span class="material-symbols-outlined">quiz</span>質問を投稿</a></li>
            <li><button id="modalButton" class="logoutButton"><span class="material-symbols-outlined">logout</span></button></li>
        </ul>
    </nav>

    <!-- モーダルウィンドウ -->
    <div id="modal" class="modal" onclick="closeModal()">
        <div class="modal-content">
            <span class="close">×</span>
            <h2 class="modal_h2">
                <span id="warning" class="material-symbols-outlined">warning</span>ログアウトしてもよろしいですか？
            </h2>
            <div class="modalButton">
                <button id="yes-button" onclick="location.href='login.php'">はい</button>
                <button id="cancel-button">キャンセル</button>
            </div>
        </div>
    </div>

    <script>
        const modalButton = document.getElementById("modalButton");
        const modal = document.getElementById("modal");
        const close = document.querySelector(".close");
        const cancelButton = document.getElementById('cancel-button');

        modalButton.addEventListener("click", () => {
            modal.style.display = "block";
        });

        // 右上の×アイコンをクリックされたらモーダルウィンドウを閉じる
        close.addEventListener("click", () => {
            modal.style.display = "none";
        });

        // 「キャンセル」ボタンがクリックされたらモーダルウィンドウを閉じる
        cancelButton.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        function closeModal() {
            const modal = document.querySelector('.modal');
            modal.style.display = 'none';
        }
    </script>
</body>
</html>
