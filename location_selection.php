<?php
// データベース設定
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// データベース接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続エラーの確認
if ($conn->connect_error) {
    die("接続失敗: " . $conn->connect_error);
}

// フォームが送信されたかをチェック
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['data_column'])) {
    // 選択されたオプションの値を取得
    $selectedOption = $conn->real_escape_string($_POST['data_column']);

    // SQL文を準備
    $sql = "INSERT INTO locations (location) VALUES ('$selectedOption')";

    // SQL文を実行
    if ($conn->query($sql) === TRUE) {
        // 最後に挿入されたレコードのIDを取得
        $last_id = $conn->insert_id;
        echo "新しいレコードが正常に追加されました。IDは " . $last_id;
        
        // 挿入されたデータを取得
        $sql = "SELECT location FROM locations WHERE id = $last_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // データの出力
            while($row = $result->fetch_assoc()) {
                echo "選択した場所: " . $row["location"];
            }
        } else {
            echo "結果が0件です";
        }
    } else {
        echo "エラー: " . $sql . "<br>" . $conn->error;
    }
}

// 接続を閉じる
$conn->close();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>データ入力フォーム</title>
    <style>
        /* コンテンツを中央揃えにするスタイル */
        .centered {
            text-align: center;
        }

        /* リンクを中央揃えにするスタイル */
        .centered-link {
            display: block; /* ブロック要素として扱う */
            text-align: center; /* テキストを中央揃えにする */
            margin: 0 auto; /* 上下のマージンは0、左右のマージンは自動 */
        }
    </style>
</head>
<body>
    <h1 class="centered">ロケーション選択フォーム</h1>
    
    <form method="post" class="centered">
        <label for="data_column">場所選択:</label>
        <select name="data_column" id="data_column" required>
            <option value="">--選択してください--</option>
            <option value="社内">社内</option>
            <option value="自宅">自宅</option>
            <option value="その他(出張先)">その他(出張先)</option>
        </select>
        <input type="submit" value="送信">
    </form>

    <?php if (!empty($selectedOption)) : ?>
        <p class="centered">した場所: <?php echo htmlspecialchars($selectedOption, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <div class="centered-link">
        <a href="welcome.php" class="btn btn-primary">戻る</a>
    </div>

</body>
</html>