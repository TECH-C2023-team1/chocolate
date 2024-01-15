<?php
session_start();
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
$query = "SELECT id, username FROM users";
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
    <h2>User List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php
        // データベースから取得した結果を表示
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <?php
    // データベース切断
    $conn->close();
    ?>

</body>
</html>