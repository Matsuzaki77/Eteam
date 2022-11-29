<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カート詳細</title>
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
                <a class="nav-link active" aria-current="page" href="./cart.html"><i class="bi bi-cart"></i>カート</a>
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

<div name ="maindiv" class="container-fluid">
  <div class="row">
  <h2 class="mt-5">ショッピングカート</h2>
    <?php
    //$pdo = new PDO('mysql:host=localhost;dbname=usertbl;charset=utf8','webuser','abccsd2');
    $pdo=new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');
    $sql = "SELECT C.user_id,Cd.cart_id,P.product_id,P.product_img,P.product_price,Cd.Shohin_quanity,P.product_name
            FROM carts AS C INNER JOIN cart_details AS Cd
            ON C.cart_id = Cd.cart_id
            INNER JOIN products AS P
            ON Cd.product_id = P.product_id
            WHERE Cd.cart_id = ?";
    $ps = $pdo -> prepare($sql);
    $ps -> bindValue(1,$_SESSION['cart_id'],PDO::PARAM_INT);
    $ps -> execute();
    $selectArray = $ps -> fetchAll();
    $sum = 0;

    foreach($selectArray as $row){
    echo
    '<div class="col-sm-8 col-12 mt-2">
      <!--カートに入れた商品を表示-->
      <div class="row mt-2">
        <div class="col-6">
        <img src="../img/',$row['product_img'],'" class="img-fluid mt-1">
        </div>
        <div class="col-6">
          <b>'.$row['product_name'].'</b>
          <p>価格:'.number_format($row['product_price']).'円<br>
          数量：'.$row['Shohin_quanity'].' <button class="btn-sm btn-danger ms-4 mt-3 mb-1 ">削除</button>';
          echo
        '</div>
      </div>
      <hr>
    </div>';
    }
    echo
    '<div class="col-sm-3 text-end">';
    $sum += $row['Shohin_quanity'] * $row['product_price'];
    echo
      '<h2 class="mt-5">合計：'.number_format($sum).'円</h2>
      <button class="btn-lg btn-warning mt-3"><b>注文確定</b></button>
    </div>';
    ?>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>
</html>