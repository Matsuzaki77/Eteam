<?php
session_start();
$pdo=new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');
//$pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8','webuser','abccsd2');

$sql = "SELECT * FROM users WHERE user_id = ? AND user_pass = ?";
$ps = $pdo->prepare($sql);
$ps->bindValue(1, $_POST['id'], PDO::PARAM_INT);
$ps->bindValue(2, $_POST['pass'], PDO::PARAM_STR);
$ps->execute();
$searchArray = $ps->fetchAll();
foreach($searchArray as  $row){
	$_SESSION['id'] = $row['user_id'];
	$_SESSION['name'] = $row['user_name'];
	header('Location:shohin.php');
}

if(count($searchArray)==0){
	
	header('Location:login.php');
}
?>