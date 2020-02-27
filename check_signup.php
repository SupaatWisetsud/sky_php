<?php 

    include("connect.php");

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tb_user VALUES('','$name','$phone','$username','$password','user')";
    $result = mysqli_query($con,$sql);
    
    if($result){
        echo '<script type="text/javascript">window.onload = function () { alert("เพิ่มข้อมูลสำเร็จ"); window.location = "index.php";}</script>';
    }else{
        echo '<script type="text/javascript">window.onload = function () { alert("เพิ่มข้อมูลไม่สำเร็จ"); window.location = "signup.php";}</script>';
    }
    
?>