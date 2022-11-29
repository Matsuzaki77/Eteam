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
                <a class="nav-link active" aria-current="page" href="../menu.php">トップ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./cart.html"><i class="bi bi-cart"></i>カート</a>
              </li>
            </ul>
	
          </div>
          <div class="row col-lg-2 col-md-2 col-4">
              <?php
                // session_start();
                // if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false ){
	              //   header('Location:../login.php');
                // }

                // echo "ようこそ".$_SESSION['name']."さん<br>";
                // echo '<a href="../logout.php">ログアウト</a>';
              ?>
          </div>
        </div>
</nav>

<div name ="maindiv" class="container-fluid">
  <div class="row">
    <?php
    $pdo=new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');
    $sql = "SELECT * FROM products WHERE product_id = 3";
    //$ps -> bindValue(1,$_SESSION['product_id'],PDO::PARAM_STR);
    $ps = $pdo -> prepare($sql);
    $ps -> execute();
    foreach($ps -> fetchAll() as $row){
    echo
    '<div class="col-sm-8 col-12 mt-5">
      <h2>ショッピングカート</h2>
      <!--カートに入れた商品を表示-->
      <div class="row mt-2">
        <div class="col-6">
        <img src="../img/',$row['product_img'],'" class="img-fluid mt-1">
        </div>
        <div class="col-6">
          <b>'.$row['product_name'].'</b>
          <p>価格:'.number_format($row['product_price']).'円<br>
          数量：'.$_POST['cnt'].' <button class="btn-sm btn-danger ms-4 mt-3 mb-1 ">削除</button>';
          $sum += $_POST['cnt'] * $row['product_price'];
          echo
        '</div>
      </div>
    </div>
    <div class="col-sm-3 text-end">
      <h2 class="mt-5">合計：'.number_format($sum).'円</h2>
      <button class="btn-lg btn-warning mt-3"><b>注文確定</b></button>
    </div>';
    }
    ?>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>
</html>