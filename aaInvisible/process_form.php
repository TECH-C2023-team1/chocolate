<?php
// データベースへの接続情報
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";
// ↑ここ間違ってるかも！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！


// POSTデータの受け取り
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $area_name = $_POST["area_name"];
    $email = $_POST["email"];
    $area = $_POST["area"];

    // データベースに接続
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 接続の確認
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // データの挿入
    $sql = "INSERT INTO employee (id, name, email, password, area) VALUES (NULL, 'your_emp_value', '$email', 'your_password_value', '$area_name')";

    if ($conn->query($sql) === TRUE) {
        echo "データが正常に挿入されました。";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // データベース接続の終了
    $conn->close();
}
?>
