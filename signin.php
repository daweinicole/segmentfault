<?php
$service='mysql:host=localhost;dbname=segmentfault';
$name='root';
$code='';
$username=$_POST['username'];
$password=$_POST['password'];
try{
	$pdo = new PDO($service , 'root' , '');
	$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = $pdo -> query("select * from signin where username='{$username}'");
    $data = $result -> fetch(PDO::FETCH_ASSOC);
    if ($password == $data['password']) 
 /*       {
            echo "<script>alert('登录成功！')</script>欢迎！".$data['username'];
    	}
    else 
        {
            echo "<script>alert('登录失败')</script>";
    	}*/
}
catch (PDOException $e) {
            echo "数据库连接失败";
    }
?>