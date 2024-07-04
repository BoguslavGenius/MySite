<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=devise-width initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Регистрация</title>
</head>

<body>
<header class="blog-header lh-1 py-4">
    <div class="container">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-2 text-center"> SeloShop </div>
        </div>
    </div>
</header>

<?php
require('connect.php');

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users (Username, Password) VALUES ('$username','$password')";
    $result = mysqli_query($connection,$query);

    if($result){
        $smsg = "Регістраця прошла успішно";
    } else {
        $fsmsg = "Помилка";
    }
}
?>

<div class="container">
    <form class="form-signin" method="POST">
        <h2><div class="col-2 text-center"> Регістрація </div></h2>
        <?php if(isset($smsg)){ ?> <div class = "alert alert-success" role = "alert"> <?php echo $smsg; ?>  </div> <?php }?>
        <?php if(isset($fsmsg)){ ?> <div class = "alert alert-danger"  role = "alert"> <?php echo $fsmsg; ?>  </div> <?php }?>
        <input type="text" name="username" class="form-control" placeholder="Логін" required >
        <input type="password" name="password" class="form-control" placeholder="Пароль" required >
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зареєструватися</button>
        <a href="authorization.php" class="btn btn-lg btn-primary btn-block">Ввійти</a>
    </form>
</div>
</body>
</html>