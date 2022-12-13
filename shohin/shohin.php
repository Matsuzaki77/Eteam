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
<nav class="navbar navbar-expand-md navbar-light" style="background-color: #f7a10c;">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="../menu.php"><img src="../img/smalllogo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #f7a10c;">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="../menu.php">トップ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="../cart/cart.php"><i class="bi bi-cart"></i>カート</a>
              </li>
              <li class="nav-item d-sm-none">
              <?php
                session_start();
                if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false || isset($_SESSION['cart_id']) == false ){
                  header('Location:../login.php');
                }
  
                  echo "ようこそ".$_SESSION['name']."さん<br>";
                  echo '<a href="../logout.php">ログアウト</a>';
              ?>
              </li>  
          </div>
          <div class="row col-lg-2 col-md-3 col-4 d-none d-none d-md-block">
            <?php
              if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false || isset($_SESSION['cart_id']) == false ){
                header('Location:../logout.php');
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
            $sql = 'SELECT * FROM products WHERE product_id = ?';
            $ps = $pdo -> prepare($sql);
            $ps -> execute([$_REQUEST['id']]); //[$_REQUEST['product_id']]
            
          
            foreach($ps -> fetchAll() as $row){?>
              
              <div class="col-sm-4 col-12 mt-3">
                <img src="../img/<?php echo $row['product_img'] ?>" class="img-fluid">
              </div>
              <div class="col-sm-8 mt-3 col-12">
              <form action="../cart/insertcart.php" method="post">
                <h3><?php echo $row['product_name'] ?></h3>
                <h5>価格：<?php echo number_format($row['product_price']) ?>円</h5>
                <p>数量：<select name="cnt">
                <?php
                for($i = 1;$i <= 10;$i++){
                  echo '<option value="',$i,'">',$i,'</option>';
                }
                ?>
                </select></p>
                <?php
                $_SESSION['product_id'] = $row['product_id'];
                $_SESSION['product_name'] = $row['product_name'];
                $_SESSION['product_price'] = $row['product_price'];
                // echo '<input type="hidden" name="product_id" value="',$row['product_id'],'">';
                // echo '<input type="hidden" name="product_name" value="',$row['product_name'],'">';
                // echo '<input type="hidden" name="product_price" value="',$row['product_price'],'">';
                ?>
                  <div class="row">
                    <div class="col-sm-6 col-12 mt-2">
                      <input type="submit" class="btn-sm btn-warning text-white" value="カートに入れる">
               </form>  
                    </div>
                    <div class="row">
                      <div class="col-sm-12 mt-3 col-12">
                        <h5>商品詳細</h5>
                        <?php echo nl2br ($row['product_detail']) ?>
                      </div>
                    </div>
                  </div>
              </div>
          <?php
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