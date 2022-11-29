<?php
$pdo=new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');
          if(isset ($_POST[''])){
            $sql ="DELETE FROM products WHERE product_id = ?";
            $ps = $pdo -> prepare($sql);
            $ps->bindValue(1,$_POST['id'],PDO::PARAM_INT);
            $ps->excecute();

            session_start();
            unset($SESSION['products'][$_REQUEST['product_id']]);
            echo '<h3>カートから商品を削除しました。</h3><br>';
            echo'<hr>'
          }
          $selectSQL = "SELECT * FROM products";
          $selectdata = $pdo->query($)
          foreach($selectdata as $row) {
            echo "$row[product_name]:$row[product_price]<br>"
          }
?>