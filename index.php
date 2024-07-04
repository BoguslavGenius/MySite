<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=devise-width initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Мой сайт</title>
</head>
<body>
<header class="blog-header lh-2 py-4">
    <div class="container">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-2 text-center"> SeloShop </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <p align="right">
                <?php
                require('authlogic.php');
                if(!isset($_SESSION['username'])) {
                    require ('title.php');
                }
                ?>
                </p>
            </div>
        </div>
    </div>
</header>
<div class="container mt-4">
    <div class="d-flex flex-wrap">
    <?php require ('connect.php');
    $query = "SELECT * FROM products ";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    foreach ($result as $row) {
        echo '
    <div class="prod mb-4 shadow-sm">
        <div class="prod-header">
            <h4 class="my-0 font-weight-normal">'.$row["name"].'</h4>
        </div>
        <div class="prod-body">
            <a><img class="img-responsive zoom-img" src="' . $row["imagine"] . '" alt=""/></a>
        </div>
        <div class="modal-footer">
        <h5><a class="item_add"></a> <span class="item-prise">' . $row["prise"] . ' грн</span></h5>
        </div>
    </div>
    ';
    }
    ?>
    </div>
</div>
</body>
</html>