<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>モーダルの例</title>
    <link rel="stylesheet" href="../CSS/modal.css">

</head>
<body>

<!-- トリガーボタン -->
<button onclick="openModal()">ログアウト</button>

<!-- モーダル本体 -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <p>ログアウトしますか？</p>
        <button class="tab" onclick="navigateToPage('../Login/logout.php')">はい</button>
        <button onclick="closeModal()">いいえ</button>
    </div>
</div>

<script>
    // モーダルを開く関数
    function openModal() {
        var modal = document.getElementById('myModal');
        modal.classList.add('show');
    }

    // モーダルを閉じる関数
    function closeModal() {
        var modal = document.getElementById('myModal');
        modal.classList.remove('show');
    }

    // バックドロップをクリックしてモーダルを閉じる
    window.onclick = function(event) {
        var modal = document.getElementById('myModal');
        if (event.target === modal) {
            modal.classList.remove('show');
        }
    };

    //ページ切り替えの関数
    function navigateToPage(page) {
        window.location.href = page;
    }
</script>

</body>
</html>
