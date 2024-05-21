<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール確認</title>
    <style>
        img.profile_image {
            max-width: 200px; /* 最大幅を設定 */
            max-height: 200px; /* 最大高さを設定 */
            width: 200px; /* 幅を自動調整:auto */
            height: 200px; /* 高さを自動調整:auto */
            object-fit: cover; /* 画像を保持し、アスペクト比を維持しつつ要素全体にスケーリング */
            border-radius: 50%; /* 円形にする */
        }
    </style>
</head>

<body>
    <h1>プロフィール確認</h1>
    <?php
    include '../db_connect.php'; // Include the database connection script

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure password hashing
        $profile_image = $_FILES['profile_image']['name'];
        $name = $_POST['name'];
        $course = $_POST['course'];
        $singleword = $_POST['singleword'];

        // Check if email already exists
        $checkEmailSql = "SELECT id FROM users WHERE email = ?";
        $stmt = $conn->prepare($checkEmailSql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Email already exists
            echo "This email is already registered. Please use a different email.";
            echo "<button onclick=\"location.href='register.php'\">戻る</button>";
        } else {
            // Move the uploaded profile image to the server
            $target_dir = "profileicon/";
            $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
            move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file);

            // Insert user into the database
            $insertSql = "INSERT INTO users (email, password, profile_image, name, course, singleword) 
                        VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($insertSql);
            $stmt->bind_param("ssssss", $email, $password, $profile_image, $name, $course, $singleword);

            if ($stmt->execute()) {
                echo "Registration successful!";
                // 受け取ったデータを表示
                echo "<p><strong>名前:</strong> $name</p>";
                echo "<p><strong>学科:</strong> $course</p>";
                echo "<p><strong>一言:</strong> $singleword</p>";
                echo "<p><strong>メールアドレス:</strong> $email</p>";
                // 画像プレビューなども表示する場合はここで追加
                echo "<p><strong>プロフィール画像:</strong><br><img src='$profile_image' class='profile_image'></p>";
                //header("Location: login.php"); // Redirect to the login page after successful registration
                echo "<button onclick=\"location.href='result.php'\">新規作成</button>";
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        $stmt->close();
    }

    $conn->close();
    ?>

</body>

</html>
