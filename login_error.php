<?php
session_start();
if(isset($_SESSION['id'])){
    header('Location:http://localhost/php7.4.12/login_mypage/mypage.php');
}
?>

<!DOCTYPE HTML>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>ログイン</title>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>

        <main>
            <form action="mypage.php" method="post">
                <div class="error">
                    メールアドレスまたはパスワードが間違っています。
                </div>
                <div class="login_form">
                    <p>
                        <label>メールアドレス</label><br>
                        <input type="text" class="formbox" size="40" name="mail" required>
                    </p>
                    <p>
                        <label>パスワード</label><br>
                        <input type="password" class="formbox" size="40" name="password" required>
                    </p>
                    <p>
                        <input type="checkbox" name="" value="">ログイン状態を保持する
                    </p>
                    <div class="button">
                        <input type="submit" class="submit_button" size="35" value="ログイン">
                    </div>
                </div>
            </form>
        </main>

        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>