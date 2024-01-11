<?php
$selectedOption = ""; // 選択されたオプションを保持する変数

// フォームが送信されたかをチェック
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 選択されたオプションの値を取得
    if (isset($_POST['data_column'])) {
        $selectedOption = $_POST['data_column'];
    }
}
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
    
    <div class="centered-link">
        <a href="welcome.php" class="btn btn-primary">戻る</a>
    </div>

    <form method="post" class="centered">
        <label for="data_column">場所選択:</label>
        <select name="data_column" id="data_column" required>
            <option value="">選択してください</option>
            <option value="社内">社内</option>
            <option value="自宅">自宅</option>
            <option value="その他(出張先)">その他(出張先)</option>
        </select>
        <input type="submit" value="送信">
    </form>

    <?php if (!empty($selectedOption)) : ?>
        <p class="centered">選択した場所: <?php echo htmlspecialchars($selectedOption, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <a href="welcome.php" class="btn btn-primary">戻る</a>

</body>
</html>