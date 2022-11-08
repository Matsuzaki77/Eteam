<?php
// $pdo=new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');
// $sql="INSERT INTO cart_details(cart_id,product_id,shohin_quantity VALUES(SELECT * FROM carts WHERE cart_id = ? , SELECT * FROM products WHERE = "0004",?)"
// $ps=$pdo -> prepare($sql);
// $ps-> bindValue(3, ,PDO::PARAM_INT);
// $ps->execute();
?>
<!DOCTYPE html>
<html lang="ja">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>よくばり冷凍 完熟マンゴーセット</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" style="background-color: #f7a10c;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../shohin.php">トップ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../cart/cart.php"><i class="bi bi-cart"></i>カート</a>
              </li>
            </ul>
	
          </div>
          <div class="row col-lg-2 col-md-2 col-4">
              <?php
                session_start();
                if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false ){
	                header('Location:../login.php');
                }

                echo "ようこそ".$_SESSION['name']."さん<br>";
                echo '<a href="../logout.php">ログアウト</a>';
              ?>
          </div>
        </div>
</nav>

    <div name ="maindiv" class="container">
    <div class="row">
        <div class="col-sm-4 col-12 mt-3">
            <img src="../img/mango.jpg" class="img-fluid">
        </div>
        <div class="col-sm-8 mt-3 col-12">
            <h3>よくばり冷凍 完熟マンゴーセット 1kg(500g×2袋)</h3>
            <h5 class="mt-2 col-12">価格:2,890円</h5>
数量：<select name="cnt">
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <div class="row">
                <div class="col-sm-6 col-12 mt-2">
                  <?php
                  
                  ?>  
                  <button class="btn-sm btn-warning text-white">カートに入れる</button>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-3 col-12">
                        <h5>商品詳細</h5>
                        <p>内容量：
                        よくばり 冷凍完熟マンゴーセット 1kg(500g×2袋)<br>
                        【内容量】1kg(500g×2袋)<br>
                        【保存方法】　冷凍<br>
                        【賞味期限】　製造より2年<br>
                        マンゴーの種類： その他マンゴー<br>
                        温度帯： 冷凍</p> 
                    </div>
                </div>
                </div>
        </div>
    </div>
    <!-- <div class="row">           
        <div class="col-sm-2 mt-2 col-12">
                <button class="btn-sm btn-secondary">戻る</button>
        </div>
    </div> -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>
</html>
