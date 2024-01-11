<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ入力フォーム</title>
</head>
<body>
    <h1>データ入力フォーム</h1>
    
    <form method="post">
        <label for="data_column">場所選択:</label>
            <select name="data_column" id="data_column" required>
                <option value="選択肢1">社内</option>
                <option value="選択肢2">自宅</option>
                <!-- 他の選択肢も追加 -->
            </select>

        <input type="submit" value="送信">
    </form>

    <p>選択した場所: <?php echo $selectedOption; ?></p>

</body>
</html>