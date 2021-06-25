<?php
mb_internal_encoding("utf8");

session_start();

if(empty($_POST['from_mypage'])){
    header('Location:http://localhost/php7.4.12/login_mypage/login_error.php');
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" href="mypage.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>

        <main>
            <form action="mypage_update.php" method="post">
                <div class="mypage">
                    <h2>会員情報</h2>
                    <div class="message">こんにちは！<?php echo $_SESSION['name']; ?>さん</div>
                    <div class="box">
                        <div class="picture">
                            <img src="<?php echo $_SESSION['picture']?>">
                        </div>
                        <div class="my_info">
                            <p>氏名：<input type="text" name="name" size="30" value="<?php echo $_SESSION['name']; ?>"></p>
                            <p>メール：<input type="text" name="mail" size="30" value="<?php echo $_SESSION['mail']; ?>"></p>
                            <p>パスワード：<input type="text" name="password" size="30" value="<?php echo $_SESSION['password']; ?>"></p>
                        </div>
                    </div>
                    <div class="comments">
                        <textarea name="comments" cols="75" rows="5"><?php echo $_SESSION['comments']; ?></textarea>
                    </div>
                    <div class="form_center">
                        <input type="submit"  class="button" size="35" value="この内容に変更する">
                    </div>
                </div>
            </form>
        </main>

        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>