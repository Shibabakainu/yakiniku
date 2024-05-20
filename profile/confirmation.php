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
    include '../db_connect.php'; // Ensure the database connection script is included

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $target_dir = "profileicon/"; // Directory where the files will be saved
        $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image or fake image
        $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        //if (file_exists($target_file)) {
        //    echo "Sorry, file already exists.";
        //    $uploadOk = 0;
        //}

        // Check file size
        if ($_FILES["profile_image"]["size"] > 500000) { // 500KB limit
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // If everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
                echo "The file ". basename($_FILES["profile_image"]["name"]). " has been uploaded.";

                // Retrieve form data
                $profile_image = $target_file; // Store the file path in the database
                $name = $_POST['name'];
                $course = $_POST['course'];
                $singleword = $_POST['singleword'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];

                // Check if passwords match
                if ($password !== $confirm_password) {
                    die('Passwords do not match.');
                }

                // Hash the password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Check if all required fields are filled
                if ($name && $course && $singleword && $email && $hashed_password) {
                    $sql = "INSERT INTO users (email, password, profile_image, name, course, singleword) 
                            VALUES ('$email', '$hashed_password', '$profile_image', '$name', '$course', '$singleword')";

                    if ($conn->query($sql) === TRUE) {
                        echo "Registration successful!";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    echo "Please fill in all fields.";
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    // ファイルを一時的な場所に移動して保存
    $temp_image = $_FILES['profile_image']['tmp_name'];
    $final_image = $target_dir . uniqid() . '.' . $imageFileType;
    move_uploaded_file($temp_image, $final_image);

    // 受け取ったデータを表示
    echo "<p><strong>名前:</strong> $name</p>";
    echo "<p><strong>学科:</strong> $course</p>";
    echo "<p><strong>一言:</strong> $singleword</p>";
    echo "<p><strong>メールアドレス:</strong> $email</p>";
    // 画像プレビューなども表示する場合はここで追加
    echo "<p><strong>プロフィール画像:</strong><br><img src='$final_image' class='profile_image'></p>";

    $conn->close();
    ?>
    <button onclick="location.href='result.php'">新規作成</button>

</body>

</html>
