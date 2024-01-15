<?php
// データベース接続情報
$host = "localhost";
$username = "root";
$password = "";
$database = "users";

$name = $_SESSION['username'];

// データベース接続
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("データベース接続エラー: " . $conn->connect_error);
}

// データベースからidとnameを取得
$query = "SELECT id, username FROM username";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User List</title>
    </head>
    <body>
    </body>
</html>