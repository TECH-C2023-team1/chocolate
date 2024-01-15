<?php
session_start();

// セッションを破棄してログアウト
session_destroy();

// ログアウト後はログインページにリダイレクト
header("Location: login.php");
exit();
?>
