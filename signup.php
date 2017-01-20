<?php
$service;
$service='mysql:host=localhost;dbname=segmentfault';
$name='root';
$code='';
$username=$_POST['username'];
$password=$_POST['password'];
try{
	$pdo=new PDO($service,$name,$code);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$result=$pdo->query("INSERT into signin(username,password) values('{$ username}','{$password}'");
	if($result)
		/*跳转登陆界面*/
}
catch(PDOException $e){
	echo "数据库连接失败";
}
?>