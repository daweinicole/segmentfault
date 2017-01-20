<?php
$service;
$service='mysql:host=localhost;dbname=segmentfault';
$name='root';
$code='';
$answer=$_POST['answer'];
try{
	$pdo=new PDO($answer);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$result=$pdo->query("INSERT into answer(answer) values('{$ answer}'");
}
catch(PDOException $e){
	echo "数据库连接失败";
}
?>