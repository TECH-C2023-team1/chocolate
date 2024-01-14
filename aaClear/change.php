<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>勤務地変更ぱげ</title>
</head>
<body>
    <h3>勤務地を変更してください</h3>
    <form action="process_form.php" method="post">
        <label for="area">
            <input type="radio" id="area" name="area_name" value="0"> 会社<br>
            <input type="radio" id="area" name="area_name" value="1"> 自宅<br>
            <input type="radio" id="area" name="area_name" value="2"> その他
        </label>
        <br>
        <label for="area">その他の場合は入力してください：</label>
        <input type="text" id="area" name="area"><br><br>
        <input type="submit" value="送信">
    </form>
</body>
</html>
