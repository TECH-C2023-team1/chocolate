<html lang="ja">
<head>
</head>
<body>account_id : 1   ///     name : 一ノ瀬   ///     mail : 一ノ瀬@example.com   ///     password : pass1<br>account_id : 3   ///     name : test   ///     mail : test   ///     password : test<br>account_id : 4   ///     name : ttt   ///     mail : ttt@ttt   ///     password : ppp<br>account_id : 6   ///     name : 四谷   ///     mail : yotuya@yotsuya   ///     password : yotuyapass<br>account_id : 7   ///     name : 一ノ瀬   ///     mail : 一ノ瀬@example.com   ///     password : pass2<br>account_id : 9   ///     name : 一ノ瀬   ///     mail : 1tohatigauhitodesu   ///     password : pass1<br>account_id : 10   ///     name : &amp;amp;%$#\   ///     mail : dsads   ///     password : dsasdsa<br>account_id : 11   ///     name : &amp;amp;   ///     mail : &amp;amp;   ///     password : &amp;amp;<br>account_id : 12   ///     name : &amp;lt;   ///     mail : &amp;lt;   ///     password : &amp;lt;<br>account_id : 13   ///     name : &amp;gt;   ///     mail : &amp;gt;   ///     password : &amp;gt;<br>account_id : 14   ///     name : &amp;quot;   ///     mail : &amp;quot;   ///     password : &amp;quot;<br>account_id : 15   ///     name : &amp;#039;   ///     mail : &amp;#039;   ///     password : &amp;#039;<br>account_id : 16   ///     name : &amp;amp;1   ///     mail : &amp;amp;1   ///     password : &amp;amp;1<br>account_id : 19   ///     name : &amp;amp;&amp;amp;&amp;amp;&amp;amp;   ///     mail : &amp;amp;&amp;amp;&amp;amp;&amp;amp;   ///     password : &amp;amp;&amp;amp;&amp;amp;&amp;amp;<br>account_id : 20   ///     name : こてし   ///     mail : jite   ///     password : sasasasa<br>account_id : 25   ///     name : 新垣結衣   ///     mail : aragaki.yui@example.com   ///     password : aragaki<br>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>ログインシステム</title>


    <h1>↑にあるのは現在存在しているアカウントの一覧です。</h1>
    <div class="container" style="background-color:yellow;">
        <h1>ログインシステム</h1>
        <form action="login_page.php" method="POST">
            <div class="row">
                <div class="col-5 d-flex justify-content-end">
                    名前
                </div>
                <div class="col-7">
                    <input type="text" name="name" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-5 d-flex justify-content-end">
                    パスワード
                </div>
                <div class="col-7">
                    <input type="password" name="pass" required="">
                </div>
            </div>
            <div class="row justify-content-center">
                <input type="submit">
            </div>
        </form>
    </div>

    <div class="container" style="background-color:darkcyan;">
        <h1>アカウント追加機能</h1>
        <form action="add_account.php" method="POST">
            <div class="row">
                <div class="col-5 d-flex justify-content-end">
                    名前
                </div>
                <div class="col-7">
                    <input type="text" name="name" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-5 d-flex justify-content-end">
                    メールアドレス
                </div>
                <div class="col-7">
                    <input type="text" name="mail" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-5 d-flex justify-content-end">
                    パスワード
                </div>
                <div class="col-7">
                    <input type="password" name="pass" required="">
                </div>
            </div>
            <div class="row justify-content-center">
                <input type="submit">
            </div>
        </form>
    </div>

    <div class="container" style="background-color:darkcyan;">
        <h1>アカウント削除機能</h1>
        <form action="delete_account.php" method="POST">
            <div class="row">
                <div class="col-5 d-flex justify-content-end">
                    削除したいアカウント番号(半角数字)
                </div>
                <div class="col-7">
                    <input type="text" name="d_num" required="">
                </div>
            </div>
            <div class="row justify-content-center">
                <input type="submit">
            </div>
        </form>
    </div>


</body></html>