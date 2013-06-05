<?php

$dbname = 'twitter'; // ここにはデータベースの名前をいれる
$host = 'localhost'; // データベースのあるドメインを指定
$user = 'root'; // データベースに接続するユーザー名
$password = 'root'; // データベースに接続するユーザーのパスワード

$link = mysql_connect($host, $user, $password); //mysqlの接続情報を返す
$db = mysql_select_db($dbname, $link); // データベースへの接続可否を返す

$sql = 'SET NAMES utf8'; // 文字コード設定のクエリ定義
mysql_query($sql, $link); // クエリの発行

//データを保存する
if (!empty($_POST['username']) && !empty($_POST['content'])) {
    $sql = "INSERT INTO tweets (username, content, created) VALUES ('{$_POST['username']}', '{$_POST['content']}', NOW());";
    $result = mysql_query($sql, $link);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>twitter</title>
    </head>
    <body>
        <form method="post" action="">
            <textarea name="content" placeholder="New Tweet"></textarea><br>
            <input type="text" class="input-small" name="username" placeholder="Your name"><br>
            <input type="submit" class="btn" value="tweet">
        </form>
        <hr>
<?php
//データを取得する
$sql = 'SELECT * FROM tweets ORDER BY ID DESC';
$result = mysql_query($sql, $link);

while ($row = mysql_fetch_assoc($result)) {
    $tweets[] = $row;
}

for ($i = 0; $i < count($tweets); $i++) {
    echo "{$tweets[$i]['username']}<br>";
    echo "{$tweets[$i]['content']}<br>";
    echo "{$tweets[$i]['created']}<br>";
    echo "<hr>";
}
?>
    </body>
</html>