<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>test</title>
    </head>
    <body>

<?php

$tweets = array(
	array(
		'username' => 'torii',
		'created' => '2012-06-10 17:49', 'content' => 'うう( ́・ω・`)'
	),
	array(
		'username' => 'hasebe',
		'created' => '2012-06-10 16:49', 'content' => 'toriiさん、仕事してください'
	),
	array(
		'username' => 'torii',
		'created' => '2012-06-10 15:49', 'content' => '遊んでるなう'
	),
	array(
		'username' => 'hasebe',
		'created' => '2012-06-10 14:49', 'content' => 'Goodfind􏰀セミナーなう'
	),
);

for ($i = 0; $i < count($tweets); $i++) {
	echo $tweets[$i]['username'] . "<br>";
	echo $tweets[$i]['content'] . "<br>";
	echo $tweets[$i]['created'] . "<br>";
	echo "<hr>";
}

?>


    </body>
</html>

