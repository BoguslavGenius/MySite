<?php
session_start();
require('connect.php');

if(isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE Username = '$username' and Password = '$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if($count == 1){
        if($username == "Admin"){
            $_SESSION['username'] = "Admin";
            header('Location: adminpage.php');
        }else{
            $_SESSION['username'] = $username;
            header('Location: index.php');
        }
    } else {
        echo "Ошибка";
    }
}

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo $username;
    echo "<a href = 'logout.php' class=btn.btn-lg.btn-primary'> <br>Logout </a>";}
