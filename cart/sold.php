<?php
session_start();
$pdo = new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');
$selectsql = "SELECT * FROM cart_details WHERE cart_id = ?";
$selectps = $pdo -> prepare($selectsql);
$selectps -> bindValue(1,$_SESSION['cart_id'],PDO::PARAM_STR);
$selectps -> execute();
foreach($selectps -> fetchAll() as $row){
  $sql = "INSERT INTO solds(cart_id,user_id,product_id,order_date)
        values(?,?,?,?)";
$ps = $pdo->prepare($sql);
$date = date('Y-m-d H:i:s');
$ps->bindValue(1,$row['cart_id'],PDO::PARAM_STR);
$ps->bindValue(2,$_SESSION['id'],PDO::PARAM_STR);
$ps->bindValue(3,$row['product_id'],PDO::PARAM_STR);
$ps->bindValue(4,$date,PDO::PARAM_STR);
$ps->execute();
}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <title>注文完了</title>
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
        </div>
</nav>
    <div name="maindiv" class="container">
        <h2 class="mt-3">ありがとうございます。注文が確定されました。</h2>
        <div class="row offset-md-4 col-md-4 mt-5">
            <input type="submit" class="btn btn-primary" onclick="location.href='../menu.php'" value="商品一覧へ" >
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>