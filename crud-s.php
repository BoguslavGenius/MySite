<?php
require ('connect.php');

if(isset($_POST['add'])){
    $pname = $_POST['name'];
    $imagine = $_POST['imagine'];
    $prise = $_POST['prise'];
    $query = "INSERT INTO products (imagine,name,prise) VALUES ('$imagine','$pname','$prise')";
    $result = mysqli_query($connection,$query);
}

if (isset($_POST['edit'])){
    $pname = $_POST['name'];
    $imagine = $_POST['imagine'];
    $prise = $_POST['prise'];
    $get_id = $_GET['id'];
    $query = ("UPDATE products SET imagine='$imagine', name='$pname', prise='$prise' WHERE TID='$get_id'");
    $result = mysqli_query($connection,$query);
}

if(isset($_POST['delete'])){
    $get_id = $_GET['id'];
    $query = ("DELETE FROM products WHERE TID='$get_id'");
    $result = mysqli_query($connection,$query);
}
