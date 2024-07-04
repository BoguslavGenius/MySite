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
<?php require ('crud-s.php')?>
<body>
<header class="blog-header lh-1 py-4">
    <div class="container">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-2 text-center"> Сторінка Адміністратора </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <p align="right">
                <?php
                require('authlogic.php');
                ?>
                </p>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-12">
            <button class="btn btn-success mt-2" data-toggle="modal" data-target="#create"> <i class="fa fa-plus"></i></button>
            <table class="table table-striped table-hover mt-2">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Им'я</th>
                    <th scope="col">Ціна</th>
                    <th scope="col">Шлях до фото</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT * FROM products ";
                $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                $qu = ("UPDATE products SET imagine=4, name=3, prise=2 WHERE TID = 1");
                foreach ($result as $item) { ?>
                <tr>
                    <th scope="row"><?php echo $item["TID"]?></th>
                    <td><?php echo $item["name"]?></td>
                    <td><?php echo $item["prise"]?> </td>
                    <td><?php echo $item["imagine"]?> </td>
                    <td><a href="?id = <?php echo $item["TID"]?>" class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $item["TID"]?>"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $item["TID"]?>"  ><i class="fa fa-trash-alt"></i></a>
                    </td>
                </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="edit<?php echo $item["TID"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" >Изменить товар</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="?id=<?php echo $item["TID"]?>" method="post">
                                        <div class="form-group">
                                            <small>Имя</small>
                                            <input type="text" class="form-control" name="name" placeholder="Название товара"
                                            value="<?php echo $item["name"]?>">
                                        </div>
                                        <div class="form-group">
                                            <small>Цена</small>
                                            <input type="text" class="form-control" name="prise" placeholder="Цена товара"
                                            value="<?php echo $item["prise"]?>">
                                        </div>
                                        <small>Фото</small>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="imagine" placeholder="Фото товара"
                                            value="<?php echo $item["imagine"]?>">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                                    <button type="submit" class="btn btn-primary" name="edit">Зберезги</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="delete<?php echo $item["TID"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" >Удалить товар № <?php echo $item["TID"]?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-footer">
                                    <form action="?id=<?php echo $item["TID"]?>" method="post">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                                    <button type="submit" class="btn btn-danger" name="delete">Видалити</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Додати товар</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <small>Ім'я</small>
                        <input type="text" class="form-control" name="name" placeholder="Название товара">
                    </div>
                    <div class="form-group">
                        <small>Ціна</small>
                        <input type="text" class="form-control" name="prise" placeholder="Цена товара">
                    </div>
                    <small>Фото</small>
                    <div class="form-group">
                        <input type="text" class="form-control" name="imagine" placeholder="Фото товара">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                <button type="submit" class="btn btn-primary" name="add">Додати</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/34541c87ab.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>