<?php
session_start();
include("connect.php");

if(isset($_SESSION["user_id"])) header("Location: products.php");

if (isset($_POST["btn_submit"])) {
  $username = $_POST["txt_username"];
  $password = $_POST["txt_password"];


  $strSQL = "SELECT * FROM tb_user WHERE username = '$username' and password = '$password' ";

  $objQuery = mysqli_query($con, $strSQL);
  $objResult = mysqli_fetch_assoc($objQuery);

  if (!$objResult) {
    echo "Username and Password Incorrect!";
  } else {
    $_SESSION["user_id"] = $objResult["user_id"];

    if ($objResult['status'] == 'admin') {
      header("location:admin.php");
    } else {
      header("location:employee.php");
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="jumbotron text-center head" style="margin-bottom:0">
    <h1>ร้านมีตังเฟอร์นิเจอร์</h1>
    <p>สาขาบุรีรัมย์</p>
  </div>
  <div class="row">
    <div class="col"></div>
    <div class="col">
      <h1>เข้าสู่ระบบ</h1>
      <form method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Enter username" name="txt_username">
        </div>
        <div class="form-group">
          <label>Password:</label>
          <input type="password" class="form-control" placeholder="Enter password" name="txt_password">
        </div>
        <div>
          ไม่ได้เป็นสมาชิก? <a href="./signup.php">กดที่นี่</a>
        </div>

        <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col"></div>
  </div>

</body>

</html>