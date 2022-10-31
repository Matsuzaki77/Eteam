<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <style>

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <form action="shohin.php" method="post">
            <div class="text-center mt-3">
                <h2>ログイン</h2>
            </div>
            <div class="row offset-4 col-4 mt-3">
                <label for="txt1" class="form-label">ユーザーID</label>
                <input type="text" name="mail" class="form-control" id="txt1" placeholder="name@example.com">
            </div>
            <div class="row offset-4 col-4 mt-3">
                <label for="txt2" class="form-label">パスワード</label>
                <input type="password" name="pass" class="form-control" id="txt2">
            </div>
            <div class="row offset-4 col-4 mt-4">
                <input type="submit" class="btn btn-warning" name="login" value="ログイン" >
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>