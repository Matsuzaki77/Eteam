<?php
    session_start();
    try{
    //$pdo = new PDO('mysql:host=localhost;dbname=usertbl;charset=utf8','webuser','abccsd2');
    $pdo=new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');
        $sql = "INSERT INTO cart_details(cart_id,product_id,shohin_quantity)VALUES(?,?,?)";
        $ps1 = $pdo -> prepare($sql);
        $ps1 -> bindValue(1,$_SESSION['cart_id'],PDO::PARAM_INT);
        $ps1 -> bindValue(2,$_SESSION['product_id'],PDO::PARAM_STR);
        $ps1 -> bindValue(3,$_POST['cnt'],PDO::PARAM_INT);
        $ps1 -> execute();
        header('Location:cart.php');
    }catch(PDOException $e){
        echo 'カートに入ってます<br>';
        echo '<a href="./cart.php">カートへ</a>';
    }
?>

