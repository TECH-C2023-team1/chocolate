<?php
// データベースへの接続情報
$servername = "データベースのホスト名";
$username = "root";
$password = "";
$dbname = "データベース名";

// POSTデータの取得
$selectedOption = $_POST['option'];
$inputData = $_POST['data'];

// データベースに接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続確認
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// データをデータベースに挿入
$sql = "INSERT INTO your_table_name (option_column, data_column) VALUES ('$selectedOption', '$inputData')";

if ($conn->query($sql) === TRUE) {
    echo "データが正常に挿入されました";
} else {
    echo "エラー: " . $sql . "<br>" . $conn->error;
}

// データベースとの接続を閉じる
$conn->close();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ入力フォーム</title>
</head>
<body>
    <h1>データ入力フォーム</h1>
    
    <form action="process.php" method="post">
        <label for="option">選択肢:</label>
        <select name="option" id="option">
            <option value="選択肢1">選択肢1</option>
            <option value="選択肢2">選択肢2</option>
            <!-- 他の選択肢も追加 -->
        </select>

        <label for="data">情報入力:</label>
        <input type="text" name="data" id="data" required>

        <input type="submit" value="送信">
    </form>
</body>
</html>
