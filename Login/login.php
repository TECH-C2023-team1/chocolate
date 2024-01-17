<?php
// データベース接続情報
$host = "localhost";
$username = "root";
$password = "";
$database = "users";

// データベース接続
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("データベース接続エラー: " . $conn->connect_error);
}

// ログイン処理
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // パスワードのハッシュ化などのセキュリティ対策が必要です

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // ログイン成功時の処理
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ..\aaClear\change.php");
        exit();
    } else {
        echo "ログイン失敗";
    }
}

// データベース切断
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="../CSS/tab.css">
    <link rel="stylesheet" href="../CSS/modal.css">
</head>
<body>
    <div class="tab-container">
        <button class="tab" onclick="navigateToPage('../aaClear/change.php')">MAIN ぱげ</button>
        <button class="tab" onclick="navigateToPage('../aaClear/maneger_page.php')">SYSTEM</button>
        <!-- モーダルトリガーボタン -->
        <button class="tab" onclick="openModal('logoutModal')">ログアウト</button>
    </div>

    <!-- モーダル本体 -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <p>ログアウトしますか？</p>
            <button class="tabb" onclick="navigateToPage('../Login/logout.php')">はい</button>
            <button class="tabb" onclick="closeModal()">いいえ</button>
        </div>
    </div>

    <script>
        function navigateToPage(page) {
            window.location.href = page;
        }

        // モーダルを開く関数
        function openModal() {
            var modal = document.getElementById('myModal');
            modal.classList.add('show');
        }

        // モーダルを閉じる関数
        function closeModal() {
            var modal = document.getElementById('myModal');
            modal.classList.remove('show');
        }

        // バックドロップをクリックしてモーダルを閉じる
        window.onclick = function(event) {
            var modal = document.getElementById('myModal');
            if (event.target === modal) {
                modal.classList.remove('show');
            }
        };
    </script>
    <?php
    // Check if the user is logged in
    session_start();
    if (isset($_SESSION['username'])) {
        echo '<p>ログインしています</p>';
    }
    ?>
        <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" name="login" value="Login">
    </form>

        <button onclick="navigateToPage('../Login/register.php')">新規登録</button>


</body>
</html>
