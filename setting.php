<?php
try{
    $pdo=new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');
    echo '接続成功';
}catch(PDOException $e){
    echo '接続失敗'.$e->getMessage;
}

?>
