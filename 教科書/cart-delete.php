<?php require '../header.php';?>
<?php require 'menu.php';?>
<?php
session_start();
unset($_SESSION['product'][$_REQUEST['id']]);
echo 'カートから商品を削除しました。';
echo '<hr>';
require 'cart.php';
?>
<?php require '../footer.php';?>