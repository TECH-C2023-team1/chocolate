<<<<<<< HEAD:welcome.php
<?php
session_start();
// セッション変数 $_SESSION["loggedin"]を確認。ログイン済だったらウェルカムページへリダイレクト
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ 
            font: 14px sans-serif;
            text-align: center; 
        }
    </style>
</head>
<body>
    <h1 class="my-5">お疲れ様です,<b><?php echo htmlspecialchars($_SESSION["name"]); ?></b>. 以下から選んでください.</h1>
    <p>
        <a href="location_selection.php" class="btn btn-primary ml-3">ロケーション選択へ</a>
    </p>
    
    <p>
        <a href="logout.php" class="btn btn-danger ml-3">ログアウト</a>
    </p>
</body>
=======
<?php
session_start();
// セッション変数 $_SESSION["loggedin"]を確認。ログイン済だったらウェルカムページへリダイレクト
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" herf="../CSS/welcome.css">
    <style>
        
    </style>
</head>
<body>
    <h1 class="my-5">Hi,<b><?php echo htmlspecialchars($_SESSION["name"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3">ログアウト</a>
    </p>
</body>
>>>>>>> 6556292a99b98f615f7f72482f1bfb3f266206c1:php/welcome.php
</html>