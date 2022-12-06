<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>旅食グルメ</title>
    <style>
        .bg-img{
background-image: url("img/topimage.jpg");
background-size: cover;
background-position: center 60%;
}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./img/favicon.ico">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light" style="background-color: #f7a10c;">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="./shohin.php"><img src="./img/smalllogo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #f7a10c;">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="./shohin.php">トップ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="./cart/cart.php"><i class="bi bi-cart"></i>カート</a>
              </li>
              <li class="nav-item d-sm-none">
              <?php
                session_start();
                if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false || isset($_SESSION['cart_id']) == false ){
                  header('Location:../login.php');
                }
  
                  echo "ようこそ".$_SESSION['name']."さん<br>";
                  echo '<a href="./logout.php">ログアウト</a>';
              ?>
              </li>  
          </div>
          <div class="row col-lg-2 col-md-2 col-4 d-none d-none d-md-block">
            <?php
              if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false || isset($_SESSION['cart_id']) == false ){
                header('Location:../login.php');
              }
  
              echo "ようこそ".$_SESSION['name']."さん<br>";
              echo '<a href="./logout.php">ログアウト</a>';
            ?>
        </div>
        </div>
      </nav>

      <div name="maindiv" class="container-fluids">
	<div class="bg-img p-5 mt-1">
		<div class="container">
			<img class="mx-auto d-block img-fluid" src="img/biglogo.png">
			<p class="text-white text-center">日本各地のグルメを取り寄せ!<br>ネット通販で地方の味覚があなたの元へ！</p>
		</div>
	</div>



        <div class="row mt-2 mb-1">
            <div class="col-12"  style="background-color:#f7a10c;">
                <h2 class="text-center text-white p-1"></i>商品一覧</h2>
            </div>
        </div>
        <div class="row p-1 gy-4">
            <?php
                $pdo=new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');
                $sql = "SELECT * FROM products";
                $selectdata = $pdo -> query($sql);
                foreach($selectdata as $row){
                    echo 
                    '<div class="col-lg-3 col-md-6">
                        <div class="card">
                            <a href="./shohin/','shohin'.$row['product_id'].'.php','"><img class="card-img-top" src="img/',$row['product_img'],'"></a>
                            <div class="card-body">
                                <h5 class="card-title">'.$row['product_name'].'</h5>
                                <p class="text-danger text-uppercase">￥'.number_format($row['product_price']).'</p>
                                <a href="./shohin/','shohin'.$row['product_id'].'.php','">>>>商品詳細へ</a>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
        <div class="row p-1 mt-5">
            <div class="col-12">
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>