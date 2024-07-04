<!doctype html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport"
          content = "width=devise-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
<header class="blog-header lh-1 py-4">
    <div class="container">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-2 text-center"> SeloShop </div>
        </div>
    </div>
</header>

<div class="container">
    <form class="form-signin" method="POST" >
        <h2><div class="col-2 text-center"> Вхід</div></h2>
        <input type="text" name="username" class="form-control" placeholder="Username" required >
        <input type="password" name="password" class="form-control" placeholder="Password" required >
        <button class="btn btn-lg btn-primary btn-block" type="submit">Війти</button>
        <a href="login.php" class="btn btn-lg btn-primary btn-block">Регістрація</a>
    </form>
</div>
<?php require('authlogic.php');
?>
</body>
</html>
