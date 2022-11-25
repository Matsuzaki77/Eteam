<!DOCTYPE html>
<html lang="ja">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細</title>
    
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
          <?php
            //$pdo = new PDO('mysql:host=localhost;dbname=usertbl;charset=utf8','webuser','abccsd2');
            $pdo=new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418446-sys2022;charset=utf8','LAA1418446', 'Eaiueo1234');
            $sql = "SELECT * FROM products WHERE product_id = 3";
            $ps = $pdo -> prepare($sql);
            $ps -> execute(); //[$_REQUEST['product_id']]
          
            foreach($ps -> fetchAll() as $row){
              echo
              '<div class="col-sm-4 col-12 mt-3">
                <img src="../img/',$row['product_img'],'" class="img-fluid">
              </div>
              <div class="col-sm-8 mt-3 col-12">
              <form action="../cart/cart.php" method="post">
                <h3>'.$row['product_name'].'</h3>
                <h5>価格：'.number_format($row['product_price']).'円</h5>
                <p>数量：<select name="cnt">';
                for($i = 1;$i <= 10;$i++){
                  echo '<option value="',$i,'">',$i,'</option>';
                }
                echo '</select></p>';
                $_SESSION['product_id'] = $row['product_id'];
                $_SESSION['product_name'] = $row['product_name'];
                $_SESSION['product_price'] = $row['product_price'];
                //echo '<input type="hidden" name="product_id" value="',$row['product_id'],'">';
                //echo '<input type="hidden" name="product_name" value="',$row['product_name'],'">';
                //echo '<input type="hidden" name="product_price" value="',$row['product_price'],'">';
                echo
                  '<div class="row">
                    <div class="col-sm-6 col-12 mt-2">
                    <input type="submit" class="btn-sm btn-warning text-white" value="カートに入れる">   
                    </div>
                    <div class="row">
                      <div class="col-sm-12 mt-3 col-12">
                        <h5>商品詳細</h5>
                        '.nl2br ($row['product_detail']).'
                      </div>
                    </div>
                  </div>
              </div>';
            }
          ?>
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

