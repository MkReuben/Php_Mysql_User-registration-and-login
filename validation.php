<?php
session_start();
if (isset($_POST['btn_log'])){
    $conn = mysqli_connect("localhost","root","","userregistration");
    $name = $_POST['user'];
    $pass = $_POST['password'];

    $selectQuery = "SELECT * FROM usertable WHERE name='$name' && password='$pass'";

    $result = mysqli_query($conn,$selectQuery);

    $num = mysqli_num_rows($result);

    if ($num==1){
        $_SESSION['username'] = $name;
        header('location:home.php');
    }else{
        header('location:login.php');
    }
}

?>