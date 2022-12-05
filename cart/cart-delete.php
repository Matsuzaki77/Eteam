<?php
$pdo=new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');

  $sql = "DELETE FROM cart_details WHERE cart_id = ? AND product_id = ?";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1, $_POST['cart_id'], PDO::PARAM_INT);
    $ps->bindValue(2, $_POST['product_id'], PDO::PARAM_STR);
    $ps->execute();

echo '<h3>カートから商品を削除しました。</h3><br>';
echo '<a href="./cart.php">カート画面</a>';
echo '<hr>';
?>