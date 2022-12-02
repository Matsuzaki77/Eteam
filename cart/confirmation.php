<?php
if(isset($_POST['delete'])){
    //削除
    header('Location:cart-delete.php');
    // echo $_POST['product_id'];
    // echo $_POST['cart_id'];
}else if(isset($_POST['confirm'])){
    //注文確定
    header('Location:sold.php');
}else{
    echo 'エラー発生';
}
?>