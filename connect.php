<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "furniture";

    $con = mysqli_connect($host, $username, $password, $db_name); //เชื่อต่อกับฐานข้อมูล
    $con -> set_charset("utf8");
    if (!$con)
    {
    die("การเชื่อมต่อล้มเหลว: " . mysqli_connect_errno());
    }
    else
    {

    }
  ?>

  