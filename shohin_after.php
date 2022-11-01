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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body>

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
        <div class="text-center mt-5">
            <h2>商品一覧</h2>
        </div>
        
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
