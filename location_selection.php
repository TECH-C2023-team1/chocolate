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
        <label for="option_column">選択肢:</label>
        <select name="option_column" id="option_column">
            <option value="選択肢1">選択肢1</option>
            <option value="選択肢2">選択肢2</option>
            <!-- 他の選択肢も追加 -->
        </select>

        <label for="data_column">情報入力:</label>
        <input type="text" name="data_column" id="data_column" required>

        <input type="submit" value="送信">
    </form>

    <p>選択した場所: <?php echo $selectedOption; ?></p>
    
</body>
</html>