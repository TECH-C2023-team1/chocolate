<?php
$selectedOption = ""; // 選択されたオプションを保持する変数

// フォームが送信されたかをチェック
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = $_POST['data_column']; // 選択されたオプションの値を取得
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ入力フォーム</title>
</head>
<body>
    <h1>ロケーション選択フォーム</h1>
    
    <form method="post">
        <label for="data_column">場所選択:</label>
        <select name="data_column" id="data_column" required>
            <option value="">選択してください</option>
            <option value="社内">社内</option>
            <option value="自宅">自宅</option>
            <option value="その他(出張先)">その他(出張先)</option>
        </select>
        <input type="submit" value="送信">
    </form>

    <?php
    // 選択されたオプションがあれば表示
    if ($selectedOption) {
        echo "<p>選択した場所: " . htmlspecialchars($selectedOption) . "</p>";
    }
    ?>

</body>
</html>