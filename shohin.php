<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <style>
        .bg-img{
background-image: url("img/topimage.jpg");
background-size: cover;
background-position: center 60%;
}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
                <a class="nav-link active" aria-current="page" href="#">トップ</a>
              </li>
            </ul>
          </div>
        </div>

<div class="container-fluid">
        <div class="offset-10 col-4">
    <?php
                session_start();
                if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false ){
	                header('Location:index.php');
                }

                echo "ようこそ".$_SESSION['name']."さん<br>";
                echo '<a href="logout.php">ログアウト</a>';
            ?>
</div>
</div>

      </nav>

      <div name="maindiv" class="container-fluids">
	<div class="bg-img p-5">
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
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img class="card-img-top" src="img/basashi.jpg">
                    <div class="card-body">
                        <h5 class="card-title">熊本馬刺し５種食べ比べセット250ｇ（約5人前）</h5>
                        <p class="text-danger text-uppercase">￥6980</p>
                        <a href="./shohn/shohin1.php">>>>商品詳細へ</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img class="card-img-top" src="img/kani.jpg">
                    <div class="card-body">
                        <h5 class="card-title">一番人気のカニ定番品700g（総重量1kg）</h5>
                        <p class="text-danger text-uppercase">￥5970</p>
                        <a href="./shohn/shohin2.php">>>>商品詳細へ</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img class="card-img-top" src="img/fugu.jpg">
                    <div class="card-body">
                        <h5 class="card-title">特典付き国産養殖とらふぐ・セット(3-4人前)送料無料・冷凍</h5>
                        <p class="text-danger text-uppercase">￥13980</p>
                        <a href="./shohn/shohin3.php">>>>商品詳細へ</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img class="card-img-top" src="img/mango.jpg">
                    <div class="card-body">
                        <h5 class="card-title">よくばり冷凍 完熟マンゴーセット 1kg(500g×2袋)</h5>
                        <p class="text-danger text-uppercase">￥2890</p>
                        <a href="./shohn/shohin3.php">>>>商品詳細へ</a>
                    </div>
                </div>
            </div>
    
        </div>
        <div class="row p-1 mt-5">
            <div class="col-12">
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>