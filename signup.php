<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
      <h1>สมัครสมาชิก</h1>
  <form action="./check_signup.php" method="post">
  <div class="form-group">
    <label>ชื่อ-นามสกุล</label>
    <input type="text" class="form-control" placeholder="กรอกชื่อ" name="name">
</div>
<div class="form-group">
    <label>เบอร์มือถือ</label>
    <input type="text" class="form-control" placeholder="กรอกเบอร์" name="Phone">
</div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" placeholder="Enter username" name="username">
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password">
  </div>
  <div>
      เป็นสมาชิกแล้ว <a href="./index.php">กดที่นี่</a>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  <div class="col"></div>
</div>
    
</body>

</html>