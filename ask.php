<?php
$service;
$service='mysql:host=localhost;dbname=segmentfault';
$name='root';
$code='';
$headline=$_POST['headline'];
$tag=$_POST['tag'];
$details=$_POST['details'];
try{
	$pdo=new PDO($service,$headline,$tag,$details);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$result=$pdo->query("INSERT into ask(headline,tag,details) values('{$ headline}','{$tag}','{$details}'");
}
catch(PDOException $e){
	echo "数据库连接失败";
}
?>