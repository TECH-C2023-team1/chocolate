<?php
session_start();

// フォームから送信されたデータを取得
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $area = $_POST["area"];
    $username = $_SESSION['username']; // 変更した行

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
    </head>
    <body>
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <?php echo $_SERVER["PHP_SELF"]; ?>
        <h3>勤務地を変更してください</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <label>
                <input type="radio" name="area" value="1"> 職場<br>
                <input type="radio" name="area" value="2"> 自宅<br>
                <input type="radio" name="area" value="3"> その他<br><br>
                <input type="submit" value="送信">
            </label><br>
        </form>
    </body>
    </html>
    
