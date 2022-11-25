<?php
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=usertbl;charset=utf8','webuser','abccsd2');
    $sqlcart = "INSERT INTO carts(user_id)VALUES(?)";
    $ps = $pdo -> prepare($sqlcart);
    $ps -> bindValue(1,$_SESSION['id'],PDO::PARAM_STR);
    $ps -> execute();

    $selectcart = "SELECT * FROM carts WHERE user_id = ?";
    $ps = $pdo -> prepare($selectcart);
    $ps->bindValue(1, $_SESSION['id'], PDO::PARAM_STR);
    $ps->execute();
    foreach($ps -> fetchAll() as $row){
        $_SESSION['cart_id'] = $row['cart_id'];
        header('Location:menu.php');
    }
?>