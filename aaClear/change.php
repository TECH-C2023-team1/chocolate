<?php
session_start();

// セッションにユーザー名が保存されているか確認
if (!isset($_SESSION['username'])) {
    // ログインしていない場合はログインページにリダイレクト
    header("Location: ..\Login\login.php");
    exit();
}
// ログインしているユーザーのユーザー名を表示
$username = $_SESSION['username'];

// フォームから送信されたデータを取得
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $area = $_POST["area"];
    $username = $_SESSION['username'];

    // データベース接続情報
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $database = "users";

    // データベース接続
    $conn = new mysqli($host, $dbusername, $dbpassword, $database);

    // SQL インジェクション対策
    $username = mysqli_real_escape_string($conn, $username);
    $area = mysqli_real_escape_string($conn, $area);
    
    // ユーザーをデータベースに挿入
    $query = "UPDATE users SET area='$area' WHERE username='$username'";
    $result = $conn->query($query);


    // データベース切断
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>勤務地変更ぱげ</title>
        <link rel="stylesheet" href="../CSS/change.css">
        <link rel="stylesheet" href="../CSS/tab.css">
    </head>
    <body>
        <div class="tab-container">
        <button class="tab" onclick="navigateToPage('change.php')">勤務地変更</button>
        <button class="tab" onclick="navigateToPage('maneger_page.php')">一覧確認</button>
        <button class="tab" onclick="navigateToPage('../Login/login.php')"><?php echo $username; ?></button>
    </div>
    <script>
        function navigateToPage(page) {
            window.location.href = page;
        }
    </script>
        <h1>勤務地を変更してください</h1>
        <form action="" method="post">
            <label>
                <input type="radio" name="area" value="1"> 職場<br>
                <input type="radio" name="area" value="2"> 自宅<br>
                <input type="radio" name="area" value="3"> その他<br><br>
                <input type="submit" value="送信">
            </label><br>
        </form>
    </body>
    </html>
    
