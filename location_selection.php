<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ入力フォーム</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <h1>ロケーション選択フォーム</h1>
    
    <form method="post">
        <label for="data_column">場所選択:</label>
            <select name="data_column" id="data_column" required>
                <option value="選択肢1">社内</option>
                <option value="選択肢2">自宅</option>
                <option value="選択肢3">その他(出張先)</option>
                <!-- 他の選択肢も追加 -->
            </select>

        <input type="submit" value="送信">
    </form>

    <p>選択した場所:</p>

    <a href="welcome.php" class="btn btn-primary">戻る</a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>