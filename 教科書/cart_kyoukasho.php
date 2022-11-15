<?php
if(!empty($_SESSION['product'])){
    echo '<table>';
    echo '<th>商品番号</th><th>商品名</th>';
    echo '<th>価格</th><th>個数</th><th>小計</th>';
    $total=0;
    foreach ($_SESSION['product']as $id=>$product){
        echo '<tr>';
        echo '<td>', $id, '</td>';
        echo '<td><a href="detail.php?id=',$id,'">',
            $product['name'], '</a></td>';
            //教科書288p
    }
}