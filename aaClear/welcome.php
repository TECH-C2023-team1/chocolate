<?php
session_start();

// セッションにユーザー名が保存されているか確認
if (!isset($_SESSION['username'])) {
    // ログインしていない場合はログインページにリダイレクト
    header("Location: \Login\login.php");
    exit();
}

// ログインしているユーザーのユーザー名を表示
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is the welcome page. You are logged in.</p>
    <a href="../Login/logout.php">Logout</a>
</body>
</html>
