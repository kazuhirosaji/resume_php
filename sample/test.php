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
		'username' => 'ikuwow',
		'created' => '2014-06-10 17:49', 'content' => 'うう( ́・ω・`)'
	),
	array(
		'username' => 'kanou',
		'created' => '2014-06-10 16:49', 'content' => 'ikuwowさん、仕事して下さい'
	),
	array(
		'username' => 'torii',
		'created' => '2014-06-10 15:49', 'content' => 'わーい！'
	),
	array(
		'username' => 'hasebe',
		'created' => '2014-06-10 14:49', 'content' => 'Goodfindのセミナーなう'
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

