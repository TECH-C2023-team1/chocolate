<?php
session_start();
// データベース接続情報
$host = "localhost";
$username = "root";
$password = "";
$database = "users";

// セッションからユーザー名を取得
$name = $_SESSION['username'];

// データベース接続
$conn = new mysqli($host, $username, $password, $database);

// データベースからidとnameを取得
$query = "SELECT id, username, area, name FROM users";
$result = $conn->query($query);

// セッションにユーザー名が保存されているか確認
if (!isset($_SESSION['username'])) {
    // ログインしていない場合はログインページにリダイレクト
    header("Location: ..\Login\login.php");
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
        <title>User List</title>
        <link rel="stylesheet" href="../CSS/tab.css">
        <link rel="stylesheet" href="../CSS/maneger_page.css">

    </head>
    
<body>
    <div class="tab-container">
        <button class="tab" onclick="navigateToPage('change.php')">MAIN ぱげ</button>
        <button class="tab" onclick="navigateToPage('maneger_page.php')">SYSTEM</button>
        <button class="tab" onclick="navigateToPage('../Login/login.php')"><?php echo $username; ?></button>
    </div>
    <script>
        function navigateToPage(page) {
            window.location.href = page;
        }
    </script>
    <h2>User List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>勤務地</th>
        </tr>
        <?php
        // データベースから取得した結果を表示
        while ($row = $result->fetch_assoc()) {
            // 0: 未定, 1: 会社, 2: 自宅, 3: その他 と仮定
            $status = $row['area'];
            if ($status == 0) {
                $label = "未定";
            } elseif ($status == 1) {
                $label = "会社";
            } elseif ($status == 2) {
                $label = "自宅";
            } elseif ($status == 3) {
                $label = "その他";
            } else {
                $label = "未知のステータス";
            }
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>"; // ここを $row['name'] に変更
            echo "<td>" . $label . "</td>";
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
