<?php
$pdo=new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');

  $sql = "DELETE * FROM cart_details WHERE product_id && cart_id = ?";
  $ps = $pdo->prepare($sql);
  $ps->bindValue(1, $_POST['id'], PDO::PARAM_INT);
  $ps->execute();

session_start();
unset($_SESSION['products'][$_REQUEST['product_id']]);
echo '<h3>カートから商品を削除しました。</h3>';
echo '<a herf="./cart.php">カート画面</a>';
echo '<hr>';
?>